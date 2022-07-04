<?php

namespace MediaCloud\Vendor\Aws\ApplicationDiscoveryService;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Application Discovery Service** service.
 * @method \MediaCloud\Vendor\Aws\Result associateConfigurationItemsToApplication(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateConfigurationItemsToApplicationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchDeleteImportData(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchDeleteImportDataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createApplication(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteApplications(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteApplicationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAgents(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAgentsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeConfigurations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeConfigurationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeContinuousExports(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeContinuousExportsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeExportConfigurations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeExportConfigurationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeExportTasks(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeExportTasksAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeImportTasks(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeImportTasksAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateConfigurationItemsFromApplication(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateConfigurationItemsFromApplicationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result exportConfigurations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise exportConfigurationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDiscoverySummary(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDiscoverySummaryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listConfigurations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listConfigurationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listServerNeighbors(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listServerNeighborsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startContinuousExport(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startContinuousExportAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startDataCollectionByAgentIds(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startDataCollectionByAgentIdsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startExportTask(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startExportTaskAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startImportTask(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startImportTaskAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopContinuousExport(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopContinuousExportAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopDataCollectionByAgentIds(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopDataCollectionByAgentIdsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateApplication(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 */
class ApplicationDiscoveryServiceClient extends AwsClient {}
