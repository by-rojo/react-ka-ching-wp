<?php

namespace MediaCloud\Vendor\Aws\CognitoIdentityProvider;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Cognito Identity Provider** service.
 * 
 * @method \MediaCloud\Vendor\Aws\Result addCustomAttributes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise addCustomAttributesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminAddUserToGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminAddUserToGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminConfirmSignUp(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminConfirmSignUpAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminCreateUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminCreateUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminDeleteUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminDeleteUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminDeleteUserAttributes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminDeleteUserAttributesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminDisableProviderForUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminDisableProviderForUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminDisableUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminDisableUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminEnableUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminEnableUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminForgetDevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminForgetDeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminGetDevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminGetDeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminGetUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminGetUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminInitiateAuth(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminInitiateAuthAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminLinkProviderForUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminLinkProviderForUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminListDevices(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminListDevicesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminListGroupsForUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminListGroupsForUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminListUserAuthEvents(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminListUserAuthEventsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminRemoveUserFromGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminRemoveUserFromGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminResetUserPassword(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminResetUserPasswordAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminRespondToAuthChallenge(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminRespondToAuthChallengeAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminSetUserMFAPreference(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminSetUserMFAPreferenceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminSetUserPassword(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminSetUserPasswordAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminSetUserSettings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminSetUserSettingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminUpdateAuthEventFeedback(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminUpdateAuthEventFeedbackAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminUpdateDeviceStatus(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminUpdateDeviceStatusAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminUpdateUserAttributes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminUpdateUserAttributesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result adminUserGlobalSignOut(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise adminUserGlobalSignOutAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateSoftwareToken(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateSoftwareTokenAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result changePassword(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise changePasswordAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result confirmDevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise confirmDeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result confirmForgotPassword(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise confirmForgotPasswordAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result confirmSignUp(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise confirmSignUpAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createIdentityProvider(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createIdentityProviderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createResourceServer(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createResourceServerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createUserImportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createUserImportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createUserPool(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createUserPoolAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createUserPoolClient(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createUserPoolClientAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createUserPoolDomain(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createUserPoolDomainAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteIdentityProvider(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteIdentityProviderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteResourceServer(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteResourceServerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteUserAttributes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteUserAttributesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteUserPool(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteUserPoolAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteUserPoolClient(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteUserPoolClientAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteUserPoolDomain(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteUserPoolDomainAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeIdentityProvider(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeIdentityProviderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeResourceServer(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeResourceServerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeRiskConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeRiskConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeUserImportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeUserImportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeUserPool(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeUserPoolAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeUserPoolClient(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeUserPoolClientAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeUserPoolDomain(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeUserPoolDomainAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result forgetDevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise forgetDeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result forgotPassword(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise forgotPasswordAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getCSVHeader(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getCSVHeaderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDevice(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDeviceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getIdentityProviderByIdentifier(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getIdentityProviderByIdentifierAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getSigningCertificate(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getSigningCertificateAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getUICustomization(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getUICustomizationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getUser(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getUserAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getUserAttributeVerificationCode(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getUserAttributeVerificationCodeAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getUserPoolMfaConfig(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getUserPoolMfaConfigAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result globalSignOut(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise globalSignOutAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result initiateAuth(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise initiateAuthAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDevices(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDevicesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listGroups(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listIdentityProviders(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listIdentityProvidersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listResourceServers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listResourceServersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listUserImportJobs(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listUserImportJobsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listUserPoolClients(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listUserPoolClientsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listUserPools(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listUserPoolsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listUsers(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listUsersInGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listUsersInGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result resendConfirmationCode(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise resendConfirmationCodeAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result respondToAuthChallenge(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise respondToAuthChallengeAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result revokeToken(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise revokeTokenAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result setRiskConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise setRiskConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result setUICustomization(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise setUICustomizationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result setUserMFAPreference(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise setUserMFAPreferenceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result setUserPoolMfaConfig(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise setUserPoolMfaConfigAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result setUserSettings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise setUserSettingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result signUp(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise signUpAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startUserImportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startUserImportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result stopUserImportJob(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise stopUserImportJobAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateAuthEventFeedback(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateAuthEventFeedbackAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateDeviceStatus(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateDeviceStatusAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateGroup(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateGroupAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateIdentityProvider(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateIdentityProviderAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateResourceServer(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateResourceServerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateUserAttributes(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateUserAttributesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateUserPool(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateUserPoolAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateUserPoolClient(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateUserPoolClientAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateUserPoolDomain(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateUserPoolDomainAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result verifySoftwareToken(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise verifySoftwareTokenAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result verifyUserAttribute(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise verifyUserAttributeAsync(array $args = [])
 */
class CognitoIdentityProviderClient extends AwsClient {}
