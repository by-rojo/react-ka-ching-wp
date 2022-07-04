<?php

namespace MediaCloud\Vendor\Aws\Glue;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Glue** service.
 * @method \MediaCloud\Vendor\Aws\Result batchCreatePartition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchCreatePartitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchDeleteConnection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchDeleteConnectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchDeletePartition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchDeletePartitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchDeleteTable(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchDeleteTableAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchDeleteTableVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchDeleteTableVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchGetBlueprints(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchGetBlueprintsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchGetCrawlers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchGetCrawlersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchGetDevEndpoints(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchGetDevEndpointsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchGetJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchGetJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchGetPartition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchGetPartitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchGetTriggers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchGetTriggersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchGetWorkflows(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchGetWorkflowsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchStopJobRun(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchStopJobRunAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchUpdatePartition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchUpdatePartitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result cancelMLTaskRun(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise cancelMLTaskRunAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result checkSchemaVersionValidity(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise checkSchemaVersionValidityAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createBlueprint(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createBlueprintAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createClassifier(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createClassifierAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createConnection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createConnectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createCrawler(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createCrawlerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createDatabase(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createDatabaseAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createDevEndpoint(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createDevEndpointAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createMLTransform(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createMLTransformAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createPartition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createPartitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createPartitionIndex(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createPartitionIndexAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createRegistry(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createRegistryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createSchema(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createSchemaAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createScript(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createScriptAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createSecurityConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createSecurityConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createTable(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createTableAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createTrigger(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createTriggerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createUserDefinedFunction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createUserDefinedFunctionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createWorkflow(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createWorkflowAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteBlueprint(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteBlueprintAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteClassifier(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteClassifierAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteColumnStatisticsForPartition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteColumnStatisticsForPartitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteColumnStatisticsForTable(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteColumnStatisticsForTableAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteConnection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteConnectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteCrawler(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteCrawlerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteDatabase(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteDatabaseAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteDevEndpoint(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteDevEndpointAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteMLTransform(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteMLTransformAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deletePartition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deletePartitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deletePartitionIndex(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deletePartitionIndexAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRegistry(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRegistryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteResourcePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSchema(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSchemaAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSchemaVersions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSchemaVersionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSecurityConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSecurityConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteTable(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteTableAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteTableVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteTableVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteTrigger(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteTriggerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteUserDefinedFunction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteUserDefinedFunctionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteWorkflow(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteWorkflowAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getBlueprint(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getBlueprintAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getBlueprintRun(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getBlueprintRunAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getBlueprintRuns(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getBlueprintRunsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCatalogImportStatus(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCatalogImportStatusAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getClassifier(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getClassifierAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getClassifiers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getClassifiersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getColumnStatisticsForPartition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getColumnStatisticsForPartitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getColumnStatisticsForTable(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getColumnStatisticsForTableAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getConnection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getConnectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getConnections(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getConnectionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCrawler(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCrawlerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCrawlerMetrics(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCrawlerMetricsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCrawlers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCrawlersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDataCatalogEncryptionSettings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDataCatalogEncryptionSettingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDatabase(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDatabaseAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDatabases(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDatabasesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDataflowGraph(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDataflowGraphAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDevEndpoint(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDevEndpointAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDevEndpoints(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDevEndpointsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getJobBookmark(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getJobBookmarkAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getJobRun(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getJobRunAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getJobRuns(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getJobRunsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getMLTaskRun(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getMLTaskRunAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getMLTaskRuns(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getMLTaskRunsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getMLTransform(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getMLTransformAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getMLTransforms(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getMLTransformsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getMapping(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getMappingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getPartition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getPartitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getPartitionIndexes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getPartitionIndexesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getPartitions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getPartitionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getPlan(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getPlanAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getRegistry(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getRegistryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getResourcePolicies(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getResourcePoliciesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getResourcePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getResourcePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSchema(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSchemaAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSchemaByDefinition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSchemaByDefinitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSchemaVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSchemaVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSchemaVersionsDiff(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSchemaVersionsDiffAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSecurityConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSecurityConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSecurityConfigurations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSecurityConfigurationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getTable(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getTableAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getTableVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getTableVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getTableVersions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getTableVersionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getTables(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getTablesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getTags(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getTagsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getTrigger(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getTriggerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getTriggers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getTriggersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getUnfilteredPartitionMetadata(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getUnfilteredPartitionMetadataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getUnfilteredPartitionsMetadata(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getUnfilteredPartitionsMetadataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getUnfilteredTableMetadata(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getUnfilteredTableMetadataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getUserDefinedFunction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getUserDefinedFunctionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getUserDefinedFunctions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getUserDefinedFunctionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getWorkflow(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getWorkflowAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getWorkflowRun(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getWorkflowRunAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getWorkflowRunProperties(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getWorkflowRunPropertiesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getWorkflowRuns(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getWorkflowRunsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result importCatalogToGlue(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise importCatalogToGlueAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listBlueprints(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listBlueprintsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listCrawlers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listCrawlersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDevEndpoints(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDevEndpointsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listMLTransforms(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listMLTransformsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listRegistries(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listRegistriesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSchemaVersions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listSchemaVersionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listSchemas(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listSchemasAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTriggers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTriggersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listWorkflows(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listWorkflowsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putDataCatalogEncryptionSettings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putDataCatalogEncryptionSettingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putResourcePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putSchemaVersionMetadata(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putSchemaVersionMetadataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putWorkflowRunProperties(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putWorkflowRunPropertiesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result querySchemaVersionMetadata(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise querySchemaVersionMetadataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result registerSchemaVersion(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise registerSchemaVersionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result removeSchemaVersionMetadata(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise removeSchemaVersionMetadataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result resetJobBookmark(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise resetJobBookmarkAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result resumeWorkflowRun(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise resumeWorkflowRunAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result searchTables(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise searchTablesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startBlueprintRun(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startBlueprintRunAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startCrawler(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startCrawlerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startCrawlerSchedule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startCrawlerScheduleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startExportLabelsTaskRun(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startExportLabelsTaskRunAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startImportLabelsTaskRun(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startImportLabelsTaskRunAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startJobRun(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startJobRunAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startMLEvaluationTaskRun(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startMLEvaluationTaskRunAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startMLLabelingSetGenerationTaskRun(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startMLLabelingSetGenerationTaskRunAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startTrigger(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startTriggerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startWorkflowRun(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startWorkflowRunAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopCrawler(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopCrawlerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopCrawlerSchedule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopCrawlerScheduleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopTrigger(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopTriggerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopWorkflowRun(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopWorkflowRunAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateBlueprint(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateBlueprintAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateClassifier(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateClassifierAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateColumnStatisticsForPartition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateColumnStatisticsForPartitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateColumnStatisticsForTable(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateColumnStatisticsForTableAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateConnection(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateConnectionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateCrawler(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateCrawlerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateCrawlerSchedule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateCrawlerScheduleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateDatabase(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateDatabaseAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateDevEndpoint(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateDevEndpointAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateMLTransform(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateMLTransformAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updatePartition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updatePartitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateRegistry(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateRegistryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateSchema(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateSchemaAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateTable(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateTableAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateTrigger(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateTriggerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateUserDefinedFunction(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateUserDefinedFunctionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateWorkflow(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateWorkflowAsync(array $args = [])
 */
class GlueClient extends AwsClient {}
