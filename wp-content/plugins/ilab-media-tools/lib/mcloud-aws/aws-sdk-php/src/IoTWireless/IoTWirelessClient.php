<?php

namespace MediaCloud\Vendor\Aws\IoTWireless;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS IoT Wireless** service.
 * @method \MediaCloud\Vendor\Aws\Result associateAwsAccountWithPartnerAccount(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateAwsAccountWithPartnerAccountAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateMulticastGroupWithFuotaTask(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateMulticastGroupWithFuotaTaskAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateWirelessDeviceWithFuotaTask(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateWirelessDeviceWithFuotaTaskAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateWirelessDeviceWithMulticastGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateWirelessDeviceWithMulticastGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateWirelessDeviceWithThing(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateWirelessDeviceWithThingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateWirelessGatewayWithCertificate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateWirelessGatewayWithCertificateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateWirelessGatewayWithThing(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateWirelessGatewayWithThingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result cancelMulticastGroupSession(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise cancelMulticastGroupSessionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createDestination(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createDestinationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createDeviceProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createDeviceProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createFuotaTask(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createFuotaTaskAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createMulticastGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createMulticastGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createServiceProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createServiceProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createWirelessDevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createWirelessDeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createWirelessGateway(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createWirelessGatewayAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createWirelessGatewayTask(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createWirelessGatewayTaskAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createWirelessGatewayTaskDefinition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createWirelessGatewayTaskDefinitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteDestination(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteDestinationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteDeviceProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteDeviceProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteFuotaTask(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteFuotaTaskAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteMulticastGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteMulticastGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteQueuedMessages(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteQueuedMessagesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteServiceProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteServiceProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteWirelessDevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteWirelessDeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteWirelessGateway(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteWirelessGatewayAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteWirelessGatewayTask(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteWirelessGatewayTaskAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteWirelessGatewayTaskDefinition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteWirelessGatewayTaskDefinitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateAwsAccountFromPartnerAccount(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateAwsAccountFromPartnerAccountAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateMulticastGroupFromFuotaTask(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateMulticastGroupFromFuotaTaskAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateWirelessDeviceFromFuotaTask(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateWirelessDeviceFromFuotaTaskAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateWirelessDeviceFromMulticastGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateWirelessDeviceFromMulticastGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateWirelessDeviceFromThing(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateWirelessDeviceFromThingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateWirelessGatewayFromCertificate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateWirelessGatewayFromCertificateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateWirelessGatewayFromThing(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateWirelessGatewayFromThingAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDestination(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDestinationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDeviceProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDeviceProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getFuotaTask(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getFuotaTaskAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getLogLevelsByResourceTypes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getLogLevelsByResourceTypesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getMulticastGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getMulticastGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getMulticastGroupSession(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getMulticastGroupSessionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getNetworkAnalyzerConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getNetworkAnalyzerConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getPartnerAccount(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getPartnerAccountAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getResourceEventConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getResourceEventConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getResourceLogLevel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getResourceLogLevelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getServiceEndpoint(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getServiceEndpointAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getServiceProfile(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getServiceProfileAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getWirelessDevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getWirelessDeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getWirelessDeviceStatistics(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getWirelessDeviceStatisticsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getWirelessGateway(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getWirelessGatewayAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getWirelessGatewayCertificate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getWirelessGatewayCertificateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getWirelessGatewayFirmwareInformation(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getWirelessGatewayFirmwareInformationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getWirelessGatewayStatistics(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getWirelessGatewayStatisticsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getWirelessGatewayTask(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getWirelessGatewayTaskAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getWirelessGatewayTaskDefinition(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getWirelessGatewayTaskDefinitionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDestinations(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDestinationsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDeviceProfiles(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDeviceProfilesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listFuotaTasks(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listFuotaTasksAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listMulticastGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listMulticastGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listMulticastGroupsByFuotaTask(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listMulticastGroupsByFuotaTaskAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPartnerAccounts(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPartnerAccountsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listQueuedMessages(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listQueuedMessagesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listServiceProfiles(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listServiceProfilesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listWirelessDevices(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listWirelessDevicesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listWirelessGatewayTaskDefinitions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listWirelessGatewayTaskDefinitionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listWirelessGateways(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listWirelessGatewaysAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putResourceLogLevel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putResourceLogLevelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result resetAllResourceLogLevels(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise resetAllResourceLogLevelsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result resetResourceLogLevel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise resetResourceLogLevelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result sendDataToMulticastGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise sendDataToMulticastGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result sendDataToWirelessDevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise sendDataToWirelessDeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startBulkAssociateWirelessDeviceWithMulticastGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startBulkAssociateWirelessDeviceWithMulticastGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startBulkDisassociateWirelessDeviceFromMulticastGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startBulkDisassociateWirelessDeviceFromMulticastGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startFuotaTask(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startFuotaTaskAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startMulticastGroupSession(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startMulticastGroupSessionAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result testWirelessDevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise testWirelessDeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateDestination(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateDestinationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateFuotaTask(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateFuotaTaskAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateLogLevelsByResourceTypes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateLogLevelsByResourceTypesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateMulticastGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateMulticastGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateNetworkAnalyzerConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateNetworkAnalyzerConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updatePartnerAccount(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updatePartnerAccountAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateResourceEventConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateResourceEventConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateWirelessDevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateWirelessDeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateWirelessGateway(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateWirelessGatewayAsync(array $args = [])
 */
class IoTWirelessClient extends AwsClient {}
