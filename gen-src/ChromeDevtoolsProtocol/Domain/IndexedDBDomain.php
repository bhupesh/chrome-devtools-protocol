<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\IndexedDB\ClearObjectStoreRequest;
use ChromeDevtoolsProtocol\Model\IndexedDB\DeleteDatabaseRequest;
use ChromeDevtoolsProtocol\Model\IndexedDB\RequestDataRequest;
use ChromeDevtoolsProtocol\Model\IndexedDB\RequestDataResponse;
use ChromeDevtoolsProtocol\Model\IndexedDB\RequestDatabaseNamesRequest;
use ChromeDevtoolsProtocol\Model\IndexedDB\RequestDatabaseNamesResponse;
use ChromeDevtoolsProtocol\Model\IndexedDB\RequestDatabaseRequest;
use ChromeDevtoolsProtocol\Model\IndexedDB\RequestDatabaseResponse;

class IndexedDBDomain implements IndexedDBDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'IndexedDB.enable', $request);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'IndexedDB.disable', $request);
	}


	public function requestDatabaseNames(ContextInterface $ctx, RequestDatabaseNamesRequest $request): RequestDatabaseNamesResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'IndexedDB.requestDatabaseNames', $request);
		return RequestDatabaseNamesResponse::fromJson($response);
	}


	public function requestDatabase(ContextInterface $ctx, RequestDatabaseRequest $request): RequestDatabaseResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'IndexedDB.requestDatabase', $request);
		return RequestDatabaseResponse::fromJson($response);
	}


	public function requestData(ContextInterface $ctx, RequestDataRequest $request): RequestDataResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'IndexedDB.requestData', $request);
		return RequestDataResponse::fromJson($response);
	}


	public function clearObjectStore(ContextInterface $ctx, ClearObjectStoreRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'IndexedDB.clearObjectStore', $request);
	}


	public function deleteDatabase(ContextInterface $ctx, DeleteDatabaseRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'IndexedDB.deleteDatabase', $request);
	}
}
