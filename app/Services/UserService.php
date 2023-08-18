<?php

namespace App\Services;

use App\Models\User;
use App\Services\FileService;

class UserService 
{
	public static function createUser($first_name,$last_name,$image)
	{
		$data = FileService::saveFile($image);
		$user = new User();
		$user->first_name = $first_name;
		$user->last_name = $last_name;
		$user->image_name = $data['name'];
		$user->uuid = $data['uuid'];
		$user->save();

		return $user;
	}

}
?>