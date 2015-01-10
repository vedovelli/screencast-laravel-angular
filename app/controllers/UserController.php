<?php
// TODO adicionar validacao
class UserController extends \BaseController {

	private $userModel;

	function __construct(User $user)
	{
		$this->userModel = $user;
	}

	public function index()
	{
		$cities = null;
		$orderBy = null;
		$limit = null;
		$page = null;

		if(Input::get('cities') != 'undefined'){

			$cities = Input::get('cities');
		}

		if(Input::get('orderBy') != 'undefined'){

			$orderBy = Input::get('orderBy');
		}

		if(Input::get('limit') != 'undefined'){

			$limit = Input::get('limit');
		}

		if(Input::get('page') != 'undefined'){

			$page = Input::get('page');
		}

		$user_list = $this->userModel->list_users($cities, $orderBy, $limit, $page);

		return Response::json($user_list, 200);
	}

	public function store()
	{
		$user = $this->userModel->save_user(Input::all());

		$response = $this->prepare_response(['user' => $user, 'description' => 'Recently saved user']);

		return Response::json($response, 200);
	}

	public function show($id)
	{
		$user = $this->userModel->get_user($id);

		$response = $this->prepare_response(['user' => $user, 'description' => 'Selected user']);

		return Response::json($response, 200);
	}

	public function update($id)
	{
		$user = $this->userModel->update_user($id, Input::all());

		$response = $this->prepare_response(['user' => $user, 'description' => 'Recently updated user']);

		return Response::json($response, 200);
	}

	public function destroy($id)
	{
		$user = $this->userModel->delete_user($id);

		$response = $this->prepare_response(['user' => $user, 'description' => 'Recently deleted user']);

		return Response::json($response, 200);
	}

	public function gravatar($email){

		$gravatar = $this->userModel->get_gravatar($email);

		$response = [];

		$response['success'] = !empty($gravatar) && !is_null($gravatar);

		$response['description'] = 'User gravatar';

		$response['gravatar'] = $gravatar;

		return $response;
	}

	private function prepare_response($params)
	{
		$response = [];

		$response['success'] = isset($params['user']);

		$response['description'] = $params['description'];

		$response['user'] = $params['user'];

		return $response;
	}

}