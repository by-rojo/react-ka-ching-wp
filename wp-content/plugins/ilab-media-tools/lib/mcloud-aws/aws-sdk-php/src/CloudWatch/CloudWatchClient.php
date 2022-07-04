<?php

namespace MediaCloud\Vendor\Aws\CloudWatch;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudWatch** service.
 *
 * @method \MediaCloud\Vendor\Aws\Result deleteAlarms(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteAlarmsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteAnomalyDetector(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteAnomalyDetectorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteDashboards(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteDashboardsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteInsightRules(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteInsightRulesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteMetricStream(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteMetricStreamAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAlarmHistory(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAlarmHistoryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAlarms(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAlarmsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAlarmsForMetric(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAlarmsForMetricAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAnomalyDetectors(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAnomalyDetectorsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeInsightRules(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeInsightRulesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disableAlarmActions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disableAlarmActionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disableInsightRules(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disableInsightRulesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result enableAlarmActions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise enableAlarmActionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result enableInsightRules(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise enableInsightRulesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDashboard(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDashboardAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getInsightRuleReport(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getInsightRuleReportAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getMetricData(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getMetricDataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getMetricStatistics(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getMetricStatisticsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getMetricStream(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getMetricStreamAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getMetricWidgetImage(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getMetricWidgetImageAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDashboards(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDashboardsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listMetricStreams(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listMetricStreamsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listMetrics(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listMetricsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putAnomalyDetector(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putAnomalyDetectorAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putCompositeAlarm(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putCompositeAlarmAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putDashboard(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putDashboardAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putInsightRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putInsightRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putMetricAlarm(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putMetricAlarmAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putMetricData(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putMetricDataAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putMetricStream(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putMetricStreamAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result setAlarmState(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise setAlarmStateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startMetricStreams(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startMetricStreamsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopMetricStreams(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopMetricStreamsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class CloudWatchClient extends AwsClient {}
