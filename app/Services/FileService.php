<?php

namespace App\Services;


class FileService 
{
	public static function saveFile($file)
	{
		$name = $file->getClientOriginalName();
		$uuid = md5(rand().$name);          
		$filename = $file->storeAs('/uploads/', $uuid.'/' . $name,['disk' => 'public_uploads']);
		$data['name'] = $name;
		$data['uuid'] = $uuid;
		
		return $data;

	}

}
?>