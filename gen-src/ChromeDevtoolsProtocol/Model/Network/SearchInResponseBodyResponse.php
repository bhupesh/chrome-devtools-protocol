<?php
namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Model\Debugger\SearchMatch;

/**
 * Response to Network.searchInResponseBody command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SearchInResponseBodyResponse implements \JsonSerializable
{
	/**
	 * List of search matches.
	 *
	 * @var SearchMatch[]
	 */
	public $result;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->result)) {
			$instance->result = [];
			foreach ($data->result as $item) {
				$instance->result[] = SearchMatch::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->result !== null) {
			$data->result = [];
			foreach ($this->result as $item) {
				$data->result[] = $item->jsonSerialize();
			}
		}
		return $data;
	}
}
