<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Storage\CacheStorageContentUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Storage\CacheStorageListUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Storage\ClearDataForOriginRequest;
use ChromeDevtoolsProtocol\Model\Storage\GetUsageAndQuotaRequest;
use ChromeDevtoolsProtocol\Model\Storage\GetUsageAndQuotaResponse;
use ChromeDevtoolsProtocol\Model\Storage\IndexedDBContentUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Storage\IndexedDBListUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Storage\TrackCacheStorageForOriginRequest;
use ChromeDevtoolsProtocol\Model\Storage\TrackIndexedDBForOriginRequest;
use ChromeDevtoolsProtocol\Model\Storage\UntrackCacheStorageForOriginRequest;
use ChromeDevtoolsProtocol\Model\Storage\UntrackIndexedDBForOriginRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * Storage domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface StorageDomainInterface
{
	/**
	 * Clears storage for origin.
	 *
	 * @param ContextInterface $ctx
	 * @param ClearDataForOriginRequest $request
	 *
	 * @return void
	 */
	public function clearDataForOrigin(ContextInterface $ctx, ClearDataForOriginRequest $request): void;


	/**
	 * Returns usage and quota in bytes.
	 *
	 * @param ContextInterface $ctx
	 * @param GetUsageAndQuotaRequest $request
	 *
	 * @return GetUsageAndQuotaResponse
	 */
	public function getUsageAndQuota(ContextInterface $ctx, GetUsageAndQuotaRequest $request): GetUsageAndQuotaResponse;


	/**
	 * Registers origin to be notified when an update occurs to its cache storage list.
	 *
	 * @param ContextInterface $ctx
	 * @param TrackCacheStorageForOriginRequest $request
	 *
	 * @return void
	 */
	public function trackCacheStorageForOrigin(ContextInterface $ctx, TrackCacheStorageForOriginRequest $request): void;


	/**
	 * Unregisters origin from receiving notifications for cache storage.
	 *
	 * @param ContextInterface $ctx
	 * @param UntrackCacheStorageForOriginRequest $request
	 *
	 * @return void
	 */
	public function untrackCacheStorageForOrigin(ContextInterface $ctx, UntrackCacheStorageForOriginRequest $request): void;


	/**
	 * Registers origin to be notified when an update occurs to its IndexedDB.
	 *
	 * @param ContextInterface $ctx
	 * @param TrackIndexedDBForOriginRequest $request
	 *
	 * @return void
	 */
	public function trackIndexedDBForOrigin(ContextInterface $ctx, TrackIndexedDBForOriginRequest $request): void;


	/**
	 * Unregisters origin from receiving notifications for IndexedDB.
	 *
	 * @param ContextInterface $ctx
	 * @param UntrackIndexedDBForOriginRequest $request
	 *
	 * @return void
	 */
	public function untrackIndexedDBForOrigin(ContextInterface $ctx, UntrackIndexedDBForOriginRequest $request): void;


	/**
	 * A cache has been added/deleted.
	 *
	 * Listener will be called whenever event Storage.cacheStorageListUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addCacheStorageListUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * A cache has been added/deleted.
	 *
	 * Method will block until first Storage.cacheStorageListUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return CacheStorageListUpdatedEvent
	 */
	public function awaitCacheStorageListUpdated(ContextInterface $ctx): CacheStorageListUpdatedEvent;


	/**
	 * A cache's contents have been modified.
	 *
	 * Listener will be called whenever event Storage.cacheStorageContentUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addCacheStorageContentUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * A cache's contents have been modified.
	 *
	 * Method will block until first Storage.cacheStorageContentUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return CacheStorageContentUpdatedEvent
	 */
	public function awaitCacheStorageContentUpdated(ContextInterface $ctx): CacheStorageContentUpdatedEvent;


	/**
	 * The origin's IndexedDB database list has been modified.
	 *
	 * Listener will be called whenever event Storage.indexedDBListUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addIndexedDBListUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * The origin's IndexedDB database list has been modified.
	 *
	 * Method will block until first Storage.indexedDBListUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return IndexedDBListUpdatedEvent
	 */
	public function awaitIndexedDBListUpdated(ContextInterface $ctx): IndexedDBListUpdatedEvent;


	/**
	 * The origin's IndexedDB object store has been modified.
	 *
	 * Listener will be called whenever event Storage.indexedDBContentUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addIndexedDBContentUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * The origin's IndexedDB object store has been modified.
	 *
	 * Method will block until first Storage.indexedDBContentUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return IndexedDBContentUpdatedEvent
	 */
	public function awaitIndexedDBContentUpdated(ContextInterface $ctx): IndexedDBContentUpdatedEvent;
}
