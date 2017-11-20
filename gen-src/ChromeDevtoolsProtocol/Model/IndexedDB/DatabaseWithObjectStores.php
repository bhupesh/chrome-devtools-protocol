<?php
namespace ChromeDevtoolsProtocol\Model\IndexedDB;

/**
 * Database with an array of object stores.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DatabaseWithObjectStores implements \JsonSerializable
{
	/**
	 * Database name.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Database version.
	 *
	 * @var int
	 */
	public $version;

	/**
	 * Object stores in this database.
	 *
	 * @var ObjectStore[]
	 */
	public $objectStores;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->name)) {
			$instance->name = (string)$data->name;
		}
		if (isset($data->version)) {
			$instance->version = (int)$data->version;
		}
		if (isset($data->objectStores)) {
			$instance->objectStores = [];
			foreach ($data->objectStores as $item) {
				$instance->objectStores[] = ObjectStore::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->name !== null) {
			$data->name = $this->name;
		}
		if ($this->version !== null) {
			$data->version = $this->version;
		}
		if ($this->objectStores !== null) {
			$data->objectStores = [];
			foreach ($this->objectStores as $item) {
				$data->objectStores[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
