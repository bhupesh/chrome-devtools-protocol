<?php
namespace ChromeDevtoolsProtocol\Model\Runtime;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetCustomObjectFormatterEnabledRequestBuilder
{
	private $enabled;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetCustomObjectFormatterEnabledRequest
	{
		$instance = new SetCustomObjectFormatterEnabledRequest();
		if ($this->enabled === null) {
			throw new BuilderException('Property [enabled] is required.');
		}
		$instance->enabled = $this->enabled;
		return $instance;
	}


	/**
	 * @param bool $enabled
	 *
	 * @return self
	 */
	public function setEnabled($enabled): self
	{
		$this->enabled = $enabled;
		return $this;
	}
}
