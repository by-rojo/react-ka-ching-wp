<?php

namespace MediaCloud\Vendor\Aws\drs;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Elastic Disaster Recovery Service** service.
 * @method \MediaCloud\Vendor\Aws\Result createReplicationConfigurationTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createReplicationConfigurationTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRecoveryInstance(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRecoveryInstanceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteReplicationConfigurationTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteReplicationConfigurationTemplateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteSourceServer(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteSourceServerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeJobLogItems(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeJobLogItemsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeRecoveryInstances(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeRecoveryInstancesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeRecoverySnapshots(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeRecoverySnapshotsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeReplicationConfigurationTemplates(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeReplicationConfigurationTemplatesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeSourceServers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeSourceServersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disconnectRecoveryInstance(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disconnectRecoveryInstanceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disconnectSourceServer(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disconnectSourceServerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getFailbackReplicationConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getFailbackReplicationConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getLaunchConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getLaunchConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getReplicationConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getReplicationConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result initializeService(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise initializeServiceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result retryDataReplication(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise retryDataReplicationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startFailbackLaunch(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startFailbackLaunchAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startRecovery(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startRecoveryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopFailback(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopFailbackAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result terminateRecoveryInstances(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise terminateRecoveryInstancesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateFailbackReplicationConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateFailbackReplicationConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateLaunchConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateLaunchConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateReplicationConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateReplicationConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateReplicationConfigurationTemplate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateReplicationConfigurationTemplateAsync(array $args = [])
 */
class drsClient extends AwsClient {}