<?php
namespace ChromeDevtoolsProtocol\Model\Runtime;

use ChromeDevtoolsProtocol\Exception\BuilderException;

/**
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class EvaluateRequestBuilder
{
	private $expression;

	private $objectGroup;

	private $includeCommandLineAPI;

	private $silent;

	private $contextId;

	private $returnByValue;

	private $generatePreview;

	private $userGesture;

	private $awaitPromise;


	/**
	 * Validate non-optional parameters and return new instance.
	 */
	public function build(): EvaluateRequest
	{
		$instance = new EvaluateRequest();
		if ($this->expression === null) {
			throw new BuilderException('Property [expression] is required.');
		}
		$instance->expression = $this->expression;
		$instance->objectGroup = $this->objectGroup;
		$instance->includeCommandLineAPI = $this->includeCommandLineAPI;
		$instance->silent = $this->silent;
		$instance->contextId = $this->contextId;
		$instance->returnByValue = $this->returnByValue;
		$instance->generatePreview = $this->generatePreview;
		$instance->userGesture = $this->userGesture;
		$instance->awaitPromise = $this->awaitPromise;
		return $instance;
	}


	/**
	 * @param string $expression
	 *
	 * @return self
	 */
	public function setExpression($expression): self
	{
		$this->expression = $expression;
		return $this;
	}


	/**
	 * @param string|null $objectGroup
	 *
	 * @return self
	 */
	public function setObjectGroup($objectGroup): self
	{
		$this->objectGroup = $objectGroup;
		return $this;
	}


	/**
	 * @param bool|null $includeCommandLineAPI
	 *
	 * @return self
	 */
	public function setIncludeCommandLineAPI($includeCommandLineAPI): self
	{
		$this->includeCommandLineAPI = $includeCommandLineAPI;
		return $this;
	}


	/**
	 * @param bool|null $silent
	 *
	 * @return self
	 */
	public function setSilent($silent): self
	{
		$this->silent = $silent;
		return $this;
	}


	/**
	 * @param int $contextId
	 *
	 * @return self
	 */
	public function setContextId($contextId): self
	{
		$this->contextId = $contextId;
		return $this;
	}


	/**
	 * @param bool|null $returnByValue
	 *
	 * @return self
	 */
	public function setReturnByValue($returnByValue): self
	{
		$this->returnByValue = $returnByValue;
		return $this;
	}


	/**
	 * @param bool|null $generatePreview
	 *
	 * @return self
	 */
	public function setGeneratePreview($generatePreview): self
	{
		$this->generatePreview = $generatePreview;
		return $this;
	}


	/**
	 * @param bool|null $userGesture
	 *
	 * @return self
	 */
	public function setUserGesture($userGesture): self
	{
		$this->userGesture = $userGesture;
		return $this;
	}


	/**
	 * @param bool|null $awaitPromise
	 *
	 * @return self
	 */
	public function setAwaitPromise($awaitPromise): self
	{
		$this->awaitPromise = $awaitPromise;
		return $this;
	}
}
