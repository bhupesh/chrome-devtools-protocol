<?php
namespace ChromeDevtoolsProtocol\Model\Network;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetCookieRequestBuilder
{
	private $name;

	private $value;

	private $url;

	private $domain;

	private $path;

	private $secure;

	private $httpOnly;

	private $sameSite;

	private $expires;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): SetCookieRequest
	{
		$instance = new SetCookieRequest();
		if ($this->name === null) {
			throw new BuilderException('Property [name] is required.');
		}
		$instance->name = $this->name;
		if ($this->value === null) {
			throw new BuilderException('Property [value] is required.');
		}
		$instance->value = $this->value;
		$instance->url = $this->url;
		$instance->domain = $this->domain;
		$instance->path = $this->path;
		$instance->secure = $this->secure;
		$instance->httpOnly = $this->httpOnly;
		$instance->sameSite = $this->sameSite;
		$instance->expires = $this->expires;
		return $instance;
	}


	/**
	 * @param string $name
	 *
	 * @return self
	 */
	public function setName($name): self
	{
		$this->name = $name;
		return $this;
	}


	/**
	 * @param string $value
	 *
	 * @return self
	 */
	public function setValue($value): self
	{
		$this->value = $value;
		return $this;
	}


	/**
	 * @param string|null $url
	 *
	 * @return self
	 */
	public function setUrl($url): self
	{
		$this->url = $url;
		return $this;
	}


	/**
	 * @param string|null $domain
	 *
	 * @return self
	 */
	public function setDomain($domain): self
	{
		$this->domain = $domain;
		return $this;
	}


	/**
	 * @param string|null $path
	 *
	 * @return self
	 */
	public function setPath($path): self
	{
		$this->path = $path;
		return $this;
	}


	/**
	 * @param bool|null $secure
	 *
	 * @return self
	 */
	public function setSecure($secure): self
	{
		$this->secure = $secure;
		return $this;
	}


	/**
	 * @param bool|null $httpOnly
	 *
	 * @return self
	 */
	public function setHttpOnly($httpOnly): self
	{
		$this->httpOnly = $httpOnly;
		return $this;
	}


	/**
	 * @param string $sameSite
	 *
	 * @return self
	 */
	public function setSameSite($sameSite): self
	{
		$this->sameSite = $sameSite;
		return $this;
	}


	/**
	 * @param int|float $expires
	 *
	 * @return self
	 */
	public function setExpires($expires): self
	{
		$this->expires = $expires;
		return $this;
	}
}
