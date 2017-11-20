<?php
namespace ChromeDevtoolsProtocol\Model\CSS;

/**
 * Request for CSS.getPlatformFontsForNode command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetPlatformFontsForNodeRequest implements \JsonSerializable
{
	/** @var int */
	public $nodeId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->nodeId)) {
			$instance->nodeId = (int)$data->nodeId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->nodeId !== null) {
			$data->nodeId = $this->nodeId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return GetPlatformFontsForNodeRequestBuilder
	 */
	public static function builder(): GetPlatformFontsForNodeRequestBuilder
	{
		return new GetPlatformFontsForNodeRequestBuilder();
	}
}
