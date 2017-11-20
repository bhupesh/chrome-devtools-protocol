<?php
namespace ChromeDevtoolsProtocol\Model\Runtime;

/**
 * Issued when object should be inspected (for example, as a result of inspect() command line API call).
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InspectRequestedEvent implements \JsonSerializable
{
	/** @var RemoteObject */
	public $object;

	/** @var object */
	public $hints;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->object)) {
			$instance->object = RemoteObject::fromJson($data->object);
		}
		if (isset($data->hints)) {
			$instance->hints = $data->hints;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->object !== null) {
			$data->object = $this->object->jsonSerialize();
		}
		if ($this->hints !== null) {
			$data->hints = $this->hints;
		}
		return $data;
	}
}
