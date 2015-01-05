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
		$user_list = $this->userModel->list_users(3);

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

	private function prepare_response($params)
	{
		$response = [];

		$response['success'] = isset($params['user']);

		$response['description'] = $params['description'];
		
		$response['user'] = $params['user'];

		return $response;
	}

}