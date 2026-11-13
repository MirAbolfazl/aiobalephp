<?php

declare(strict_types=1);

namespace Aiobale\Methods\Generated;

/**
 * Generated for aiobalephp from upstream protocol descriptors at
 * https://github.com/iliasync/balenova/tree/09e957012a5f4f3c437ee3095c3b9cc667f67e38
 */
require_once __DIR__ . '/../../Types/AiobalePhpRpcTypes.php';

abstract class AiobalePhpRpcMethod extends \Aiobale\Model\BaleMethod
{
    protected const RPC_SERVICE = '';
    protected const RPC_METHOD = '';
    protected const REQUEST_TYPE = '';
    protected const RESPONSE_TYPE = '';

    public static function schema(): array
    {
        $request = static::REQUEST_TYPE;
        return $request::schema();
    }

    public static function service(): string { return static::RPC_SERVICE; }
    public static function methodName(): string { return static::RPC_METHOD; }
    public static function returning(): ?string { return static::RESPONSE_TYPE; }
}

final class AiobalePhpRpc_24b28c8ae47205 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'ai.bale.pushak.Push';
    protected const RPC_METHOD = 'RegisterGooglePush';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRegisterGooglePushRequest_c406191a3c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_04b156a23bab9b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'ai.bale.pushak.Push';
    protected const RPC_METHOD = 'RegisterPush';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRegisterPushRequest_4690f36e31::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebRegisterPushResponse_95ad386993::class;
}

final class AiobalePhpRpc_acc5e805f7aaa1 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'ai.bale.pushak.Push';
    protected const RPC_METHOD = 'SetConfig';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetConfigRequest_ddc6461a91::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_c496ae0a8ca236 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'ai.bale.pushak.Push';
    protected const RPC_METHOD = 'UnregisterAllPushCredentials';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebUnregisterAllPushCredentialsRequest_357dbc4d47::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_2dd8cae105cac8 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'ai.bale.pushak.Push';
    protected const RPC_METHOD = 'UnregisterGooglePush';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebUnregisterGooglePushRequest_fa71550a3e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_198a52b346c05a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'ai.bale.pushak.Push';
    protected const RPC_METHOD = 'UnregisterPush';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebUnregisterPushRequest_df02152498::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_0ae9546c274155 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'ai.bale.server.Files';
    protected const RPC_METHOD = 'FileUploadCancel';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebFileUploadCancelRequest_ce6d9eb8ac::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebFileUploadCancelResponse_2d4fa497dc::class;
}

final class AiobalePhpRpc_ddc34e22666bad extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'ai.bale.server.Files';
    protected const RPC_METHOD = 'GetNasimFilePublicUrl';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetNasimFilePublicUrlRequest_cb6aaf5737::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetNasimFilePublicUrlResponse_66fbfb5f46::class;
}

final class AiobalePhpRpc_2450ab7c43191e extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'ai.bale.server.Files';
    protected const RPC_METHOD = 'GetNasimFileUploadResume';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetNasimFileUploadResumeRequest_955a02aa79::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetNasimFileUploadResumeResponse_9541bed930::class;
}

final class AiobalePhpRpc_8cd42c7fe77d91 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'ai.bale.server.Files';
    protected const RPC_METHOD = 'GetNasimFileUrls';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetNasimFileUrlsRequest_6813d18dae::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetNasimFileUrlsResponse_1e308f41b9::class;
}

final class AiobalePhpRpc_56f27f554a6826 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'ai.bale.server.Files';
    protected const RPC_METHOD = 'GetUploadLimits';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUploadLimitsRequest_b3a348afbc::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUploadLimitsResponse_0b2e34b8c6::class;
}

final class AiobalePhpRpc_e7dc81c4c28612 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.abacus.v1.Abacus';
    protected const RPC_METHOD = 'EnableShowReactionFlag';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebEnableShowReactionFlagRequest_9e5080febd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_0dd39195c024d0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.abacus.v1.Abacus';
    protected const RPC_METHOD = 'GetShowReactionFlag';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetShowReactionFlagRequest_5c875fb977::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetShowReactionFlagResponse_3e5164d9eb::class;
}

final class AiobalePhpRpc_60280aeb58c914 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.abacus.v1.Abacus';
    protected const RPC_METHOD = 'LoadReactions';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadReactionsRequest_799ac342d5::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadReactionsResponse_cf23c445d1::class;
}

final class AiobalePhpRpc_4e1fb932940573 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.abacus.v1.Abacus';
    protected const RPC_METHOD = 'MessageReactionsRead';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebMessageReactionsReadRequest_e5df95b5bc::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_bb63824f1feeae extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'AddCustomIncome';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAddCustomIncomeRequest_213a610d68::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebAddCustomIncomeResponse_3ea2503ed1::class;
}

final class AiobalePhpRpc_30875079dc2b60 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'ChangeAccountState';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebChangeAccountStateRequest_fb0476b3f4::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebChangeAccountStateResponse_db553f9a65::class;
}

final class AiobalePhpRpc_3adaf5d75fc50b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'ChangeAdState';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebChangeAdStateRequest_ac9d0a7d9e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_2a8bf049638774 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'ChangeBonusCodeState';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebChangeBonusCodeStateRequest_f1ffb98312::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_27a91fd14d7d1b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'ChangeCampaignContentState';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebChangeCampaignContentStateRequest_95d45faa09::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_8d44338ecea2bf extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'ChangeCampaignState';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebChangeCampaignStateRequest_583171ce2b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_a02136c58a4676 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'ChangeChannelIncomeOwner';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebChangeChannelIncomeOwnerRequest_17a79af908::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebChangeChannelIncomeOwnerResponse_aa6f211e1b::class;
}

final class AiobalePhpRpc_4843be1d02ef27 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'ChangeChannelShowAdPermissions';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebChangeChannelShowAdPermissionsRequest_da55f0832f::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_c5038a9a03aca4 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'ChangeStatusDialogAdOrder';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebChangeStatusDialogAdOrderRequest_905044c801::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_b418c18803458d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'ChangeUserDataState';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebChangeUserDataStateRequest_779c9296ef::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_22290e436c7fc0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'ChannelIncomeGetCredit';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebChannelIncomeGetCreditRequest_927f7413dd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_2be6cd72c7a1d9 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'ChannelIncomeKifTransfer';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebT_iU_58187_0de345a9ea::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_ac930c994f2dae extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'ChannelIncomePayment';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebT_iU_58187_0de345a9ea::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebChannelIncomePaymentResponse_064e7e1ccf::class;
}

final class AiobalePhpRpc_e21b78ab7da1c1 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'ConvertIncome';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebConvertIncomeRequest_5821781823::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_65ee0a1d62e8b1 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'CreateAd';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCreateAdRequest_6c6543b056::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCreateAdResponse_5bc2445f3a::class;
}

final class AiobalePhpRpc_f8ac2cfd1b132a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'CreateAndStartChannelAd';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCreateAndStartChannelAdRequest_a1a88bf48b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCreateAndStartChannelAdResponse_dba9fdddde::class;
}

final class AiobalePhpRpc_1b613e7ac975ea extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'CreateBaleDialogCustomAd';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCreateBaleDialogCustomAdRequest_eed1539112::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCreateBaleDialogCustomAdResponse_eb6479ab7c::class;
}

final class AiobalePhpRpc_5f97647e89883a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'CreateBonusCode';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCreateBonusCodeRequest_6054592520::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCreateBonusCodeResponse_5b1c724aa3::class;
}

final class AiobalePhpRpc_26488822b4ab94 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'CreateChannelIncomeFactor';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCreateChannelIncomeFactorRequest_41a32cc9f6::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCreateChannelIncomeFactorResponse_5eeb90373e::class;
}

final class AiobalePhpRpc_88a89d1b5b8cb2 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'CreateCustomCampaignPackage';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCreateCustomCampaignPackageRequest_ee84f76a61::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_c2affb5af398b1 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'DeleteCustomIncome';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebDeleteCustomIncomeRequest_269ee73941::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_b300238ea91812 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'EditAccount';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebEditAccountRequest_a52e32abaf::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_d4a46a89f32d75 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'EditAd';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebEditAdRequest_8799f61e5c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_2b1c410f70c51a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'EditCampaignAd';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebEditCampaignAdRequest_64af3a5d1d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_257122655a5b6a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'EditCampaignContent';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebEditCampaignContentRequest_f0266c0739::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_588055daeae089 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'FinishAd';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebFinishAdRequest_34b7b4610e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebFinishAdResponse_2d505da2de::class;
}

final class AiobalePhpRpc_c6a89fd251528b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'FinishAdV2';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebFinishAdV2Request_5788df203c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_a13b56aeadbc0e extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'FinishChannelAd';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebFinishChannelAdRequest_704f3d9cf4::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebFinishChannelAdResponse_0d5e95b5c6::class;
}

final class AiobalePhpRpc_5726d1ae22d69a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetAccountData';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetAccountDataRequest_391526259e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetAccountDataResponse_7a54fb0865::class;
}

final class AiobalePhpRpc_3ea33db107b3cb extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetAccounts';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetAccountsRequest_787f01f3f6::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetAccountsResponse_de344ee45d::class;
}

final class AiobalePhpRpc_2267fef57fc2f2 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetAccountsByState';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetAccountsByStateRequest_d56db90460::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetAccountsByStateResponse_923e5dd1e5::class;
}

final class AiobalePhpRpc_80b3ca4755baa7 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetActiveAds';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetActiveAdsRequest_fd9f124634::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetActiveAdsResponse_6e88f71eb8::class;
}

final class AiobalePhpRpc_20d53577387fab extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetActiveChannelAds';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetActiveChannelAdsRequest_515e2722f2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetActiveChannelAdsResponse_d510339bbb::class;
}

final class AiobalePhpRpc_be083ea32e5617 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetAdData';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetAdDataRequest_31a98522f1::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetAdDataResponse_bb5c0b0dcd::class;
}

final class AiobalePhpRpc_e816847d7565b7 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetAdDetail';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetAdDetailRequest_2c910a7c71::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetAdDetailResponse_2e473dc68b::class;
}

final class AiobalePhpRpc_a36ec0312a4dd5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetAdProvider';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetAdProviderRequest_064f43cabf::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetAdProviderResponse_144822bcbc::class;
}

final class AiobalePhpRpc_8061764787edd7 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetAdReport';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetAdReportRequest_92b5e6abb8::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetAdReportResponse_13701853ec::class;
}

final class AiobalePhpRpc_ba5d248afb56e5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetAdReportV2';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetAdReportV2Request_a4716b170d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetAdReportV2Response_90e222b86b::class;
}

final class AiobalePhpRpc_9dec0a5d074495 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetAdsBySpotAndPlatform';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetAdsBySpotAndPlatformRequest_232046d5a6::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetAdsBySpotAndPlatformResponse_6e92e4c224::class;
}

final class AiobalePhpRpc_140a4922e4e8ed extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetAdsByStateAndSpot';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetAdsByStateAndSpotRequest_696cf55bdb::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetAdsByStateAndSpotResponse_8b85550ba4::class;
}

final class AiobalePhpRpc_d0c0e8f234645c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetAllChannelIncomesFactor';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetAllChannelIncomesFactorRequest_83c8119135::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetAllChannelIncomesFactorResponse_8c71ecab54::class;
}

final class AiobalePhpRpc_742116de4a0c70 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetAvailableCampaignStartDate';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetAvailableCampaignStartDateRequest_6bc3394363::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetAvailableCampaignStartDateResponse_32a36545da::class;
}

final class AiobalePhpRpc_895877b8c6530a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetAwaitingToShowAds';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetAwaitingToShowAdsRequest_eaf9ad3b87::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetAwaitingToShowAdsResponse_403ed5a6f4::class;
}

final class AiobalePhpRpc_4182213fed53be extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetAwaitingToShowChannelAds';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetAwaitingToShowChannelAdsRequest_77f6f3cb0a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetAwaitingToShowChannelAdsResponse_8b19d789b2::class;
}

final class AiobalePhpRpc_4eac86662b3477 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetBaleCustomAd';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetBaleCustomAdRequest_74dcde8607::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetBaleCustomAdResponse_e90788319a::class;
}

final class AiobalePhpRpc_e9dcc567b5cf24 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetBonusCodeData';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetBonusCodeDataRequest_48c6169082::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetBonusCodeDataResponse_11ee67cf16::class;
}

final class AiobalePhpRpc_72854d4c96527a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetBonusCodes';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetBonusCodesRequest_8951e7bda3::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetBonusCodesResponse_46838efee1::class;
}

final class AiobalePhpRpc_65ad6a8a9e3a15 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetBusinessAds';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetBusinessAdsRequest_2d79b783a2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetBusinessAdsResponse_e1a1cb0f20::class;
}

final class AiobalePhpRpc_2227bb4bf570c4 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetCRMIssues';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCRMIssuesRequest_fa145f23e2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCRMIssuesResponse_229d52401d::class;
}

final class AiobalePhpRpc_a10fb863abbd97 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetCampaignAds';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCampaignAdsRequest_36e50b787f::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_oc_58187_1fa94d5767::class;
}

final class AiobalePhpRpc_bbe2a6be0d0dfe extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetCampaignContentById';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCampaignContentByIdRequest_95c986bf94::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCampaignContentByIdResponse_bbb86ee131::class;
}

final class AiobalePhpRpc_cb6e18bdd86dbc extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetCampaignContents';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCampaignContentsRequest_76fb73e2be::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCampaignContentsResponse_2314ad00d4::class;
}

final class AiobalePhpRpc_dcf287c4885e74 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetCampaignData';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCampaignDataRequest_010bfbb8ae::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCampaignDataResponse_95036cc9de::class;
}

final class AiobalePhpRpc_f60a2ff7fa08dd extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetChannelAds';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetChannelAdsRequest_1c633de55c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetChannelAdsResponse_8a67f1bf50::class;
}

final class AiobalePhpRpc_a536eef8f195bc extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetChannelEarnMoneyInfo';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetChannelEarnMoneyInfoRequest_66e572c7f3::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetChannelEarnMoneyInfoResponse_d54163ec64::class;
}

final class AiobalePhpRpc_982704c027e59f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetChannelEarnMoneyStatus';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetChannelEarnMoneyStatusRequest_e9a754ce61::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetChannelEarnMoneyStatusResponse_b164aa5c6a::class;
}

final class AiobalePhpRpc_6c5d4eb9cdd149 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetChannelGraphReport';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetChannelGraphReportRequest_9cfeba8b9d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetChannelGraphReportResponse_540d6cf73f::class;
}

final class AiobalePhpRpc_3a689c63bd7a1d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetChannelIncomeReport';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetChannelIncomeReportRequest_5a372f3cab::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetChannelIncomeReportResponse_7884987d97::class;
}

final class AiobalePhpRpc_0e7fd76f3a1597 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetChannelOwnerBankInformation';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetChannelOwnerBankInformationRequest_646fb10f80::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetChannelOwnerBankInformationResponse_dbbc2c7897::class;
}

final class AiobalePhpRpc_4cf081be3ca73d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetChannelShowAdCategoryFilter';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetChannelShowAdCategoryFilterRequest_bd80c963ff::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetChannelShowAdCategoryFilterResponse_c0cabe8eaa::class;
}

final class AiobalePhpRpc_26bc0f0dde79cd extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetChannelShowAdPermissions';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetChannelShowAdPermissionsRequest_b93a908fec::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetChannelShowAdPermissionsResponse_a3ba3e0488::class;
}

final class AiobalePhpRpc_6f6d6048e360fd extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetChannelShowAdTimeRestrict';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetChannelShowAdTimeRestrictRequest_245407bc1c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetChannelShowAdTimeRestrictResponse_c792938617::class;
}

final class AiobalePhpRpc_c7327e8427ab86 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetChannelsViewReport';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetChannelsViewReportRequest_290b7ee94e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetChannelsViewReportResponse_c6d84045c5::class;
}

final class AiobalePhpRpc_145bee9f1235e7 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetConfig';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetConfigRequest_c0d2273f23::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetConfigResponse_1e0cace2c5::class;
}

final class AiobalePhpRpc_b5acaa3d84a335 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetCreditHistory';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCreditHistoryRequest_3c1400ece9::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCreditHistoryResponse_71105b45f3::class;
}

final class AiobalePhpRpc_e2d5ed79c03db7 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetCreditableAccounts';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCreditableAccountsRequest_c8caa54fdf::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCreditableAccountsResponse_9281aaf18e::class;
}

final class AiobalePhpRpc_b91dfff6fbb1a6 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetCustomIncomes';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCustomIncomesRequest_0e2a614f85::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCustomIncomesResponse_a92f450d1d::class;
}

final class AiobalePhpRpc_46771d654eaae4 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetDialogAdOrderDetails';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetDialogAdOrderDetailsRequest_89ecbade53::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetDialogAdOrderDetailsResponse_5a1a84c424::class;
}

final class AiobalePhpRpc_c3864e883652e1 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetDialogAdOrderPaymentToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetDialogAdOrderPaymentTokenRequest_aaff34c171::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetDialogAdOrderPaymentTokenResponse_d5e13dabc4::class;
}

final class AiobalePhpRpc_6bd58fcb5e6a79 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetFactorEligibleAds';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetFactorEligibleAdsRequest_963064769b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetFactorEligibleAdsResponse_0450f7edee::class;
}

final class AiobalePhpRpc_4e2348cec492f3 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetMyContactPopularChannels';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetMyContactPopularChannelsRequest_bb2dc98f9c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetMyContactPopularChannelsResponse_16d9ce68c9::class;
}

final class AiobalePhpRpc_eb0091babe1fdd extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetOnBoardingChannels';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetOnBoardingChannelsRequest_2ffd2438ab::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetOnBoardingChannelsResponse_91a269347e::class;
}

final class AiobalePhpRpc_2e48933f390fa0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetOnboardingPeers';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetOnboardingPeersRequest_9c6034e8c4::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetOnboardingPeersResponse_01ae2b16a3::class;
}

final class AiobalePhpRpc_2e7da768535af3 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetOnboardingPosts';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetOnboardingPostsRequest_7adde0c8cb::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetOnboardingPostsResponse_7751fbd9ab::class;
}

final class AiobalePhpRpc_7b318213a81b86 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetOnboardingSpotData';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetOnboardingSpotDataRequest_13007ff650::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetOnboardingSpotDataResponse_17432ad680::class;
}

final class AiobalePhpRpc_9321f9cb9f7c7f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetOwnerIdByPhone';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetOwnerIdByPhoneRequest_c1961df7bc::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetOwnerIdByPhoneResponse_8166ddb7da::class;
}

final class AiobalePhpRpc_b53489ff10e979 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetPaidAdsByTime';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetPaidAdsByTimeRequest_cbf8577b87::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetPaidAdsByTimeResponse_e88de1369c::class;
}

final class AiobalePhpRpc_40bf6e660b2427 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetPaymentData';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetPaymentDataRequest_989bd2aaa4::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetPaymentDataResponse_efaf400a10::class;
}

final class AiobalePhpRpc_982dce0514b93e extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetPeriodCapacityData';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetPeriodCapacityDataRequest_d81c3f2a85::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetPeriodCapacityDataResponse_37e1f7616a::class;
}

final class AiobalePhpRpc_926ccee91e8488 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetUserAds';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUserAdsRequest_e143546128::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUserAdsResponse_1291d4d2bd::class;
}

final class AiobalePhpRpc_dafd0e6a8368d0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetUserAuthData';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUserAuthDataRequest_18ab93ede4::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUserAuthDataResponse_b829bb97c1::class;
}

final class AiobalePhpRpc_e0e4cd48aa2f32 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetUserCampaigns';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUserCampaignsRequest_6b2960777b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_oc_58187_1fa94d5767::class;
}

final class AiobalePhpRpc_bc16cab05fec34 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetUserOnboardingScenario';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUserOnboardingScenarioRequest_d5b7593322::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUserOnboardingScenarioResponse_c2851873c1::class;
}

final class AiobalePhpRpc_21d8d9734211dc extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetUserStatus';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUserStatusRequest_c79dfb7c17::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUserStatusResponse_38cef3912a::class;
}

final class AiobalePhpRpc_14f823942c624b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetUsersAuthDataByState';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUsersAuthDataByStateRequest_e59fe890b5::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUsersAuthDataByStateResponse_fb0e958c72::class;
}

final class AiobalePhpRpc_ba68dc67a9bcd4 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetVODContents';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetVODContentsRequest_ca9bdefc64::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetVODContentsResponse_c5f1daa1a6::class;
}

final class AiobalePhpRpc_071994b598b366 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'ModifyCapacity';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebModifyCapacityRequest_a52a5e9696::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebModifyCapacityResponse_2809e6bf84::class;
}

final class AiobalePhpRpc_e90d104a49c21c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'RegisterForEarnMoney';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRegisterForEarnMoneyRequest_c37f2c7a35::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_f3abf8e4cc37d7 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'SendAdminMessage';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSendAdminMessageRequest_e4de6854eb::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_0f87fac4e9aef6 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'SendFactorMessage';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSendFactorMessageRequest_7cab78a6cf::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_0941dc3134dfb8 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'SetAdTarget';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetAdTargetRequest_773e3134dc::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_732d9fbe89de4c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'SetChannelInvoiceInfo';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetChannelInvoiceInfoRequest_4e0e4677f2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_1cb503aa0d7302 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'SetChannelOwnerBankInformation';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetChannelOwnerBankInformationRequest_cba1d73b33::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_c36357dda65f76 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'SetOnBoardingChannels';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetOnBoardingChannelsRequest_284883e895::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_61fa0bd1f8bb4a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'SetUserAuthData';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetUserAuthDataRequest_a88161f50c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_7b364cfbb65099 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'StartAd';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebStartAdRequest_6522d79a0a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_a376fc26b977c7 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'StartBaleCustomAd';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebStartBaleCustomAdRequest_176bc126f4::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebStartBaleCustomAdResponse_9c1b453169::class;
}

final class AiobalePhpRpc_6fb3e439f4f9cc extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'StartChannelAdFromOrder';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebStartChannelAdFromOrderRequest_c7545c9d47::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebStartChannelAdFromOrderResponse_bc08ac2d81::class;
}

final class AiobalePhpRpc_975efd352548f2 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'StartFromOrder';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebStartFromOrderRequest_94bd5c08c1::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebStartFromOrderResponse_e629db8342::class;
}

final class AiobalePhpRpc_39fe18ebf7c83d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'StopAllBaleCustomAds';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebStopAllBaleCustomAdsRequest_469119c5e6::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebStopAllBaleCustomAdsResponse_3e5563a520::class;
}

final class AiobalePhpRpc_ed036a2d46b269 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'SubmitChannelAdOrder';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSubmitChannelAdOrderRequest_ebac4ac654::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_7ff0be141c7b87 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'SubmitDialogAdOrder';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSubmitDialogAdOrderRequest_449e4dc77e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_189882a588daf7 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'SubmitPhotoForBaleCustomAd';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSubmitPhotoForBaleCustomAdRequest_5a7fb565fd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSubmitPhotoForBaleCustomAdResponse_bbd2fb2966::class;
}

final class AiobalePhpRpc_32f12c369300ba extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'UpdateBusinessAd';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebUpdateBusinessAdRequest_6a3dfc01a4::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_bde9c9c04b77bc extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'UpdateCRMIssue';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebUpdateCRMIssueRequest_9b0939e6d8::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_e3fc7a0b987023 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'UpdateClick';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebUpdateClickRequest_afe97ebb7e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebUpdateClickResponse_f5ef17a371::class;
}

final class AiobalePhpRpc_cabe2873187967 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'UpdateGroupStatus';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebUpdateGroupStatusRequest_a7fedf68ae::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_f13b56c5356fad extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'UpdateView';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebUpdateViewRequest_542a88d4ad::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebUpdateViewResponse_5cd16b94b0::class;
}

final class AiobalePhpRpc_76af3d69091fb8 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.anonymous_contact.v1.AnonymousContact';
    protected const RPC_METHOD = 'GetUserAnonymousContactPage';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebExtAnonymousContactGetUserAnonymousContactPageRequest_3d29d230b3::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebExtAnonymousContactGetUserAnonymousContactPageResponse_a9fe59c77c::class;
}

final class AiobalePhpRpc_793ce760b71a98 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.appzar.v1.Appzar';
    protected const RPC_METHOD = 'GetMenuButton';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetMenuButtonRequest_c30a4f7c95::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetMenuButtonResponse_83545cb5ec::class;
}

final class AiobalePhpRpc_1560519f29abaa extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.appzar.v1.Appzar';
    protected const RPC_METHOD = 'GetMiniAppUrl';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetMiniAppUrlRequest_33a72d0f23::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetMiniAppUrlResponse_bd88056306::class;
}

final class AiobalePhpRpc_4ce884455c1f58 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.appzar.v1.Appzar';
    protected const RPC_METHOD = 'InvokeCustomMethod';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebInvokeCustomMethodRequest_52cfc31bb2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebInvokeCustomMethodResponse_638eef1ed5::class;
}

final class AiobalePhpRpc_f2185ca0f75854 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'ChangeLanguage';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebChangeLanguageRequest_b34442d20a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_7e9b3c84796fca extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'ChangePhone';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebChangePhoneRequest_711f4e1ade::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_2c82cc0ed6731f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'DeleteAccount';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebDeleteAccountRequest_22b78edfb0::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_2c60a7b0f5085a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'DisableTwoFactorAuthentication';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebDisableTwoFactorAuthenticationRequest_552e131aa2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_75a604d8127ed3 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'EnableTwoFactorAuthentication';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebEnableTwoFactorAuthenticationRequest_c3c8306095::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_f8bde2ec9b4cc1 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'GetAuthSessions';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetAuthSessionsRequest_27e80b3afa::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetAuthSessionsResponse_f1c0cfd296::class;
}

final class AiobalePhpRpc_73db992a76ce37 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'GetBajeBamTicket';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetBajeBamTicketRequest_fecb95152d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetBajeBamTicketResponse_a7871e2c50::class;
}

final class AiobalePhpRpc_e487012bc3d9aa extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'GetBaleTicket';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetBaleTicketRequest_10e79e461d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_er_68945_b4246886f7::class;
}

final class AiobalePhpRpc_3c1cb96a3a6fd5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'GetJWTToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetJWTTokenRequest_eaff333c88::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetJWTTokenResponse_7a5c9ef0bd::class;
}

final class AiobalePhpRpc_28e29431a63fd2 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'GetTicket';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetTicketRequest_a31cab2dfd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_er_68945_b4246886f7::class;
}

final class AiobalePhpRpc_13da796e1ef863 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'GetUserIdToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUserIdTokenRequest_3a07afb4fd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUserIdTokenResponse_8622c179ca::class;
}

final class AiobalePhpRpc_113c2bc2e0e786 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'IsTwoFactorAuthenticationEnabled';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebIsTwoFactorAuthenticationEnabledRequest_fc44ca4aa7::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebIsTwoFactorAuthenticationEnabledResponse_66220be810::class;
}

final class AiobalePhpRpc_f12ee48cb8ad21 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'LogOut';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLogOutRequest_a04f050ad6::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLogOutResponse_6e28b6d6d3::class;
}

final class AiobalePhpRpc_9bfe5e6fbf36c1 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'RecoverPassword';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRecoverPasswordRequest_aada08abb0::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebRecoverPasswordResponse_012769a130::class;
}

final class AiobalePhpRpc_5376ab27c138db extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'SendChangePhoneVerificationCode';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSendChangePhoneVerificationCodeRequest_06783519ec::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSendChangePhoneVerificationCodeResponse_f3c1fbd928::class;
}

final class AiobalePhpRpc_2a4556eb074d29 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'SendDeleteAccountVerificationCode';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSendDeleteAccountVerificationCodeRequest_8d1b113e10::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSendDeleteAccountVerificationCodeResponse_74c8aa7c3d::class;
}

final class AiobalePhpRpc_15d39c8bcae816 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'SetNewPassword';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetNewPasswordRequest_16ff6496b2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_00a925c68e32c0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'TerminateAllSessions';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebTerminateAllSessionsRequest_bedddede53::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_6231e0fe23e9ee extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'TerminateSession';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebTerminateSessionRequest_7b47669fb8::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_4395e55e42ed08 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'VerifyEmail';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebVerifyEmailRequest_3a195b726b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_fd03710a125cf0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'VerifyPassword';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebVerifyPasswordRequest_2646c21984::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_958e1f7f9d3051 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.auth.v1.Auth';
    protected const RPC_METHOD = 'VerifyPasswordRecovery';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebVerifyPasswordRecoveryRequest_19d23c877b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_c775a413ed114d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.balebank.v1.GoldGiftPacket';
    protected const RPC_METHOD = 'GetWinnerIDs';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetWinnerIDsRequest_52837f4dd2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetWinnerIDsResponse_aa355008a4::class;
}

final class AiobalePhpRpc_ae754ec1aaf4a6 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.balebank.v1.GoldGiftPacket';
    protected const RPC_METHOD = 'OpenGoldGiftPacket';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebOpenGoldGiftPacketRequest_ec5990921c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebOpenGoldGiftPacketResponse_90bfaa071b::class;
}

final class AiobalePhpRpc_f6bc30da599686 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.balebank.v1.GoldGiftPacket';
    protected const RPC_METHOD = 'SendGoldGiftPacket';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSendGoldGiftPacketRequest_9f997251e0::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSendGoldGiftPacketResponse_6e2c78e97c::class;
}

final class AiobalePhpRpc_ac55a8ae28f251 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.balebank.v1.GoldWallet';
    protected const RPC_METHOD = 'GetBalance';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebExtGoldWalletGetBalanceRequest_4fe58a229a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebExtGoldWalletGetBalanceResponse_f0ee83fae9::class;
}

final class AiobalePhpRpc_67a7fb422ac986 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bank.v1.Bank';
    protected const RPC_METHOD = 'BuyFastCharge';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebBuyFastChargeRequest_57e78ebeee::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebBuyFastChargeResponse_918f2c54d0::class;
}

final class AiobalePhpRpc_2bb6f16bf79c05 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bank.v1.Bank';
    protected const RPC_METHOD = 'GetCardRemain';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCardRemainRequest_c9922d3ce3::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCardRemainResponse_2e6abb2fe1::class;
}

final class AiobalePhpRpc_d4f8bfb1c943a8 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bank.v1.Bank';
    protected const RPC_METHOD = 'GetCardTransferToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCardTransferTokenRequest_b1dd326f49::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCardTransferTokenResponse_d0a7ba308b::class;
}

final class AiobalePhpRpc_4407b986b9ecf2 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bank.v1.Bank';
    protected const RPC_METHOD = 'GetOTPToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetOTPTokenRequest_aedc5dedab::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetOTPTokenResponse_158cdbaed2::class;
}

final class AiobalePhpRpc_877ab9811d93ab extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bank.v1.Bank';
    protected const RPC_METHOD = 'GetOTPTokenV2';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetOTPTokenV2Request_f7fe56e815::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetOTPTokenV2Response_1e3bd12899::class;
}

final class AiobalePhpRpc_5aac614c814a40 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bank.v1.Bank';
    protected const RPC_METHOD = 'GetOrganizationPaymentToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetOrganizationPaymentTokenRequest_6379c5b7ae::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetOrganizationPaymentTokenResponse_81ac2d4245::class;
}

final class AiobalePhpRpc_38952f4b0e5934 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bank.v1.Bank';
    protected const RPC_METHOD = 'GetPSProxyPaymentToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetPSProxyPaymentTokenRequest_80e5c72259::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetPSProxyPaymentTokenResponse_2ee10ef8f9::class;
}

final class AiobalePhpRpc_23ba95a8f67ac0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bank.v1.Bank';
    protected const RPC_METHOD = 'GetPSProxyToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetPSProxyTokenRequest_72b4ab1df1::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetPSProxyTokenResponse_3b1ae459a1::class;
}

final class AiobalePhpRpc_7aad266409c709 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bank.v1.Bank';
    protected const RPC_METHOD = 'GetPayMoneyRequestToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetPayMoneyRequestTokenRequest_1bde6f5626::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetPayMoneyRequestTokenResponse_7a3bb68118::class;
}

final class AiobalePhpRpc_400426a9d05e81 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bank.v1.Bank';
    protected const RPC_METHOD = 'GetPaymentToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetPaymentTokenRequest_e433fb0f81::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetPaymentTokenResponse_72f674af40::class;
}

final class AiobalePhpRpc_4c1cf9f00ea8ee extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bank.v1.Bank';
    protected const RPC_METHOD = 'GetPayvandCard';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetPayvandCardRequest_3c8f8cc818::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetPayvandCardResponse_3c254298e5::class;
}

final class AiobalePhpRpc_c7ce3b4e27bfc8 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bank.v1.Bank';
    protected const RPC_METHOD = 'GetPayvandCardList';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetPayvandCardListRequest_41a10f9f07::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetPayvandCardListResponse_15ee8ce6e5::class;
}

final class AiobalePhpRpc_2501a242adf8f7 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bank.v1.Bank';
    protected const RPC_METHOD = 'GetRecentCharges';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetRecentChargesRequest_25365bd260::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetRecentChargesResponse_0dec81adf9::class;
}

final class AiobalePhpRpc_9c8df14adf47ee extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bank.v1.Bank';
    protected const RPC_METHOD = 'GetRemainToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetRemainTokenRequest_e592ef3cda::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetRemainTokenResponse_17aa148076::class;
}

final class AiobalePhpRpc_c2357448daa82b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bank.v1.Bank';
    protected const RPC_METHOD = 'GetSadadPSPPaymentToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetSadadPSPPaymentTokenRequest_642a269f5c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetSadadPSPPaymentTokenResponse_e6541a2997::class;
}

final class AiobalePhpRpc_c81f4565bf8b81 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bank.v1.Bank';
    protected const RPC_METHOD = 'GetTokenInvoice';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetTokenInvoiceRequest_0c78bac32d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetTokenInvoiceResponse_abb38e7444::class;
}

final class AiobalePhpRpc_0862977e39f461 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bank.v1.Bank';
    protected const RPC_METHOD = 'GrantBankiAccess';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGrantBankiAccessRequest_aedea9ca19::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_5baad589263564 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.charnet.v1.CharnetService';
    protected const RPC_METHOD = 'BuyCharge';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebBuyChargeRequest_80c13989aa::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebBuyChargeResponse_25a153c753::class;
}

final class AiobalePhpRpc_3c2c4d8ed9ffad extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.charnet.v1.CharnetService';
    protected const RPC_METHOD = 'BuyInternetBundle';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebBuyInternetBundleRequest_6d0f1c9612::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebBuyInternetBundleResponse_70f2806160::class;
}

final class AiobalePhpRpc_40efce647be34b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.charnet.v1.CharnetService';
    protected const RPC_METHOD = 'DeleteRecentChargeOrder';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebDeleteRecentChargeOrderRequest_cce1f52e35::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_3a0c888ef6515e extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.charnet.v1.CharnetService';
    protected const RPC_METHOD = 'DeleteRecentInternetBundleOrder';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebDeleteRecentInternetBundleOrderRequest_cf6655d0d4::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_84542b882de95c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.charnet.v1.CharnetService';
    protected const RPC_METHOD = 'GetAvailableCharges';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetAvailableChargesRequest_63a6d36b86::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetAvailableChargesResponse_98ded80afa::class;
}

final class AiobalePhpRpc_dc7bbb041157a2 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.charnet.v1.CharnetService';
    protected const RPC_METHOD = 'GetInternetBundleList';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetInternetBundleListRequest_f786691a2b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetInternetBundleListResponse_8c00951dae::class;
}

final class AiobalePhpRpc_00b8cb88c687a5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.charnet.v1.CharnetService';
    protected const RPC_METHOD = 'GetInternetBundlePaymentToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetInternetBundlePaymentTokenRequest_5eba26ba03::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetInternetBundlePaymentTokenResponse_19950c72a8::class;
}

final class AiobalePhpRpc_03360f013039ba extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.charnet.v1.CharnetService';
    protected const RPC_METHOD = 'GetRecentChargeOrders';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetRecentChargeOrdersRequest_e900ea9f29::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetRecentChargeOrdersResponse_a34e126445::class;
}

final class AiobalePhpRpc_a11061fa0a88ea extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.charnet.v1.CharnetService';
    protected const RPC_METHOD = 'GetRecentInternetBundleOrders';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetRecentInternetBundleOrdersRequest_95a2427f3f::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetRecentInternetBundleOrdersResponse_46d2befc84::class;
}

final class AiobalePhpRpc_d6874b2002c508 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.charnet.v1.CharnetService';
    protected const RPC_METHOD = 'GetTopUpChargePaymentToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetTopUpChargePaymentTokenRequest_e3bf8d3ccf::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetTopUpChargePaymentTokenResponse_d345eb68b6::class;
}

final class AiobalePhpRpc_c519d53ec0e116 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.charnet.v1.CharnetService';
    protected const RPC_METHOD = 'GetVoucherChargePaymentToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetVoucherChargePaymentTokenRequest_5430e61664::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetVoucherChargePaymentTokenResponse_8391995d46::class;
}

final class AiobalePhpRpc_f0107556ed46dc extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.crowdfunding.v1.CrowdFunding';
    protected const RPC_METHOD = 'GetParticipants';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetParticipantsRequest_1ebf552b8c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetParticipantsResponse_76ff4ccb7e::class;
}

final class AiobalePhpRpc_52e944c2612f3e extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.crowdfunding.v1.CrowdFunding';
    protected const RPC_METHOD = 'GetTotalPaidAmount';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetTotalPaidAmountRequest_ff6829a349::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetTotalPaidAmountResponse_85b0307254::class;
}

final class AiobalePhpRpc_6049f8371ad481 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.falake.v1.Falake';
    protected const RPC_METHOD = 'GetLinkStatus';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebExtFalakeGetLinkStatusRequest_2cec999667::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebExtFalakeGetLinkStatusResponse_703c7d41e5::class;
}

final class AiobalePhpRpc_33100ba769febb extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.fanoos.v1.fanoos';
    protected const RPC_METHOD = 'Send';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebExtFanoosSendRequest_67fff7dd38::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_7ed3acd39940fd extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.fanoos.v1.fanoos';
    protected const RPC_METHOD = 'SendBatch';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSendBatchRequest_f8391d83d7::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_5a55b833fb1446 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.feedback.v1.FeedBack';
    protected const RPC_METHOD = 'SendFeedBack';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebExtFeedBackSendFeedBackRequest_8f2ef1b963::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_5b4d02c1d423ff extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.garson.v1.Garson';
    protected const RPC_METHOD = 'EditCustomServices';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebEditCustomServicesRequest_d641625050::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebEditCustomServicesResponse_3defa9e36d::class;
}

final class AiobalePhpRpc_656260fe910277 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.garson.v1.Garson';
    protected const RPC_METHOD = 'GetAdvertisementBot';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetAdvertisementBotRequest_ccc62a01cd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetAdvertisementBotResponse_9d8deabe23::class;
}

final class AiobalePhpRpc_890e65b49ccd29 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.garson.v1.Garson';
    protected const RPC_METHOD = 'GetBotBanners';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetBotBannersRequest_4b0adfbd21::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetBotBannersResponse_f97215d1c8::class;
}

final class AiobalePhpRpc_b4722cd9eeb4bf extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.garson.v1.Garson';
    protected const RPC_METHOD = 'GetBotsByCategory';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetBotsByCategoryRequest_8ce889b687::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetBotsByCategoryResponse_aa4e0bb2a4::class;
}

final class AiobalePhpRpc_260f3be8f01392 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.garson.v1.Garson';
    protected const RPC_METHOD = 'GetCategorizedBots';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCategorizedBotsRequest_e1e721ab2e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCategorizedBotsResponse_2abfdf6fb8::class;
}

final class AiobalePhpRpc_52114a7eb5916f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.garson.v1.Garson';
    protected const RPC_METHOD = 'GetCustomServices';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCustomServicesRequest_0d2c554dec::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCustomServicesResponse_040a0b776f::class;
}

final class AiobalePhpRpc_890156cbdb76d2 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.garson.v1.Garson';
    protected const RPC_METHOD = 'GetRecommendedBots';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetRecommendedBotsRequest_e0bb9a43d0::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetRecommendedBotsResponse_9be211a2d8::class;
}

final class AiobalePhpRpc_fb01119c40dd4f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.garson.v1.Garson';
    protected const RPC_METHOD = 'GetServices';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetServicesRequest_7de40f1872::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetServicesResponse_d22d4a0992::class;
}

final class AiobalePhpRpc_2985812a9bd1da extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.garson.v1.Garson';
    protected const RPC_METHOD = 'GetTrendBots';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetTrendBotsRequest_2c291f5bdd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetTrendBotsResponse_4083d92748::class;
}

final class AiobalePhpRpc_4583076843f30e extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.garson.v1.Garson';
    protected const RPC_METHOD = 'GetUserRepeatedBots';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUserRepeatedBotsRequest_6d64bb0771::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUserRepeatedBotsResponse_beba3fb113::class;
}

final class AiobalePhpRpc_c3e974c3626587 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ghasedak.v1.GhasedakService';
    protected const RPC_METHOD = 'GetDiff';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetDiffRequest_c7800fb9eb::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetDiffResponse_92263cbb65::class;
}

final class AiobalePhpRpc_e3825c000a3422 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ghasedak.v1.GhasedakService';
    protected const RPC_METHOD = 'GetRoutesStates';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetRoutesStatesRequest_9006a454fb::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetRoutesStatesResponse_e526905e73::class;
}

final class AiobalePhpRpc_93a79df1e6c713 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.giftpacket.v1.GiftPacket';
    protected const RPC_METHOD = 'GetGiftPacketPaymentToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetGiftPacketPaymentTokenRequest_17644dadfc::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetGiftPacketPaymentTokenResponse_0958d389eb::class;
}

final class AiobalePhpRpc_af4b7ba35f4eaf extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'AddDiscussionGroupAdmin';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAddDiscussionGroupAdminRequest_5f68ac6e1b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_pQ_8a12566ff5::class;
}

final class AiobalePhpRpc_2e3a965ddda2b0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'EditGroupAvatar';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebEditGroupAvatarRequest_d358048d8b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebEditGroupAvatarResponse_2db09da58c::class;
}

final class AiobalePhpRpc_c6994e01c94815 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'EditGroupDefaultCardNumber';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebEditGroupDefaultCardNumberRequest_2615d3a21b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_49211abff13e37 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'FetchGroupAdmins';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebFetchGroupAdminsRequest_493c8ad8fa::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebFetchGroupAdminsResponse_e0d53e4e4f::class;
}

final class AiobalePhpRpc_169b8823477a10 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'GetCanSeeMessages';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCanSeeMessagesRequest_70005d05ae::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCanSeeMessagesResponse_da66072e86::class;
}

final class AiobalePhpRpc_2ab00c0bb25bd4 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'GetGroupDefaultCardNumber';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetGroupDefaultCardNumberRequest_6f0807d8ec::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetGroupDefaultCardNumberResponse_519e164b0b::class;
}

final class AiobalePhpRpc_14fbea788f1978 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'GetGroupMembersCount';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetGroupMembersCountRequest_6ae224653f::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetGroupMembersCountResponse_244c74f105::class;
}

final class AiobalePhpRpc_c654c203e43cc1 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'GetGroupRecommendations';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetGroupRecommendationsRequest_28d963ada8::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetGroupRecommendationsResponse_987c29b983::class;
}

final class AiobalePhpRpc_1acf7296441d66 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'GetMutualGroups';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetMutualGroupsRequest_44283396c1::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetMutualGroupsResponse_cf6640e950::class;
}

final class AiobalePhpRpc_e5adae6c50093d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'GetMyGroups';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetMyGroupsRequest_db69b4fcaf::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetMyGroupsResponse_8f9e9824d4::class;
}

final class AiobalePhpRpc_a60da0a809815d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'InviteUser';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebInviteUserRequest_f76e7cd7db::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_pQ_8a12566ff5::class;
}

final class AiobalePhpRpc_026b211ee55625 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'LoadFullGroups';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadFullGroupsRequest_e13e0a6f5a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadFullGroupsResponse_893faaae10::class;
}

final class AiobalePhpRpc_f54daadc44fe3a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'LoadGroupAvatars';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadGroupAvatarsRequest_82debbd6e7::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadGroupAvatarsResponse_a93f9400f1::class;
}

final class AiobalePhpRpc_971d1880f66b59 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'LoadGroups';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadGroupsRequest_8a365ccc31::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadGroupsResponse_ec1700ce38::class;
}

final class AiobalePhpRpc_7b900120c29914 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'RemoveDiscussionGroup';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRemoveDiscussionGroupRequest_f52774743a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_2d21878720098d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'RemoveGroupAvatar';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRemoveGroupAvatarRequest_adbd088bd8::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_pQ_8a12566ff5::class;
}

final class AiobalePhpRpc_cf391f0dc745d4 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'SetAvailableReactions';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetAvailableReactionsRequest_c7aaede14d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_1f02f433ac6349 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'SetCanSeeHistory';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetCanSeeHistoryRequest_0efc1419bc::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_a14b3f416dad75 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'SetCanSeeMessages';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetCanSeeMessagesRequest_b8be74642b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_1b9915d05374d5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'SetDiscussionGroup';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetDiscussionGroupRequest_d2684fb9ce::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSetDiscussionGroupResponse_1860f78ba4::class;
}

final class AiobalePhpRpc_4b8beb303b53d0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'SetMemberCustomTitle';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetMemberCustomTitleRequest_790abb0e38::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSetMemberCustomTitleResponse_c9dacc0417::class;
}

final class AiobalePhpRpc_3748c93eac363c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ketf.v1.Ketf';
    protected const RPC_METHOD = 'GetBotGroupPermissions';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetBotGroupPermissionsRequest_8920f22fc0::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetBotGroupPermissionsResponse_359bdd40d4::class;
}

final class AiobalePhpRpc_1b742394c8923f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ketf.v1.Ketf';
    protected const RPC_METHOD = 'GetBotInfo';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetBotInfoRequest_dfacbbd886::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetBotInfoResponse_757fb51d80::class;
}

final class AiobalePhpRpc_84d80177cda8b3 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ketf.v1.Ketf';
    protected const RPC_METHOD = 'GetBotWhiteList';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetBotWhiteListRequest_fa16b5e76c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetBotWhiteListResponse_5811ef45a4::class;
}

final class AiobalePhpRpc_be8dc9c8e970d3 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ketf.v1.Ketf';
    protected const RPC_METHOD = 'GetBots';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetBotsRequest_f6368b5197::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetBotsResponse_c1258295a4::class;
}

final class AiobalePhpRpc_3bf6eb4b019706 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ketf.v1.Ketf';
    protected const RPC_METHOD = 'GetInlineBotResults';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetInlineBotResultsRequest_deef741e99::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetInlineBotResultsResponse_10994cd449::class;
}

final class AiobalePhpRpc_93c860ee3f9a73 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ketf.v1.Ketf';
    protected const RPC_METHOD = 'GetPaymentDetails';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetPaymentDetailsRequest_10afd320d8::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetPaymentDetailsResponse_f5bcfc14c6::class;
}

final class AiobalePhpRpc_13a9376a1adc0a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ketf.v1.Ketf';
    protected const RPC_METHOD = 'GetUserContext';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUserContextRequest_087c3013d5::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUserContextResponse_67a62ec317::class;
}

final class AiobalePhpRpc_b1bc5cfa183084 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ketf.v1.Ketf';
    protected const RPC_METHOD = 'GetWebappHash';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetWebappHashRequest_039f5773e8::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetWebappHashResponse_39dd2e44a8::class;
}

final class AiobalePhpRpc_63bb636a9542a1 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ketf.v1.Ketf';
    protected const RPC_METHOD = 'InvokeCustomAction';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebInvokeCustomActionRequest_56739265b4::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebInvokeCustomActionResponse_e9c37cb551::class;
}

final class AiobalePhpRpc_9933fd51330436 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ketf.v1.Ketf';
    protected const RPC_METHOD = 'MakePayment';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebMakePaymentRequest_7a6ef60580::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebMakePaymentResponse_82fc52a193::class;
}

final class AiobalePhpRpc_1992d96b28a699 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ketf.v1.Ketf';
    protected const RPC_METHOD = 'SendAuthenticatedInlineCallBackData';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSendAuthenticatedInlineCallBackDataRequest_23bdca42fc::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSendAuthenticatedInlineCallBackDataResponse_c8ac1187e4::class;
}

final class AiobalePhpRpc_638e7b7652cf21 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ketf.v1.Ketf';
    protected const RPC_METHOD = 'SendInlineCallBackData';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSendInlineCallBackDataRequest_42143db828::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_5237f57f2125f6 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ketf.v1.Ketf';
    protected const RPC_METHOD = 'SendInlineCallback';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSendInlineCallbackRequest_47f5b3f64f::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSendInlineCallbackResponse_b3ea14fd90::class;
}

final class AiobalePhpRpc_dd6324014d6a73 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ketf.v1.Ketf';
    protected const RPC_METHOD = 'SendMiniAppData';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSendMiniAppDataRequest_a317b56005::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSendMiniAppDataResponse_0c87f7f6f9::class;
}

final class AiobalePhpRpc_4104c931c84895 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'CashOut';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCashOutRequest_25193e5d1b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCashOutResponse_6064a901fe::class;
}

final class AiobalePhpRpc_9675770ffb3afb extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'Charge';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebChargeRequest_b039c718aa::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebChargeResponse_9785445e6c::class;
}

final class AiobalePhpRpc_dbe57447849293 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'CheckChargePermission';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCheckChargePermissionRequest_cf7c99e5a2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCheckChargePermissionResponse_e3e26e1ccb::class;
}

final class AiobalePhpRpc_0067cc188fd666 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'CreateKifpool';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCreateKifpoolRequest_03729a2844::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCreateKifpoolResponse_b05d536156::class;
}

final class AiobalePhpRpc_9d8ffe4d6cce67 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'CryptoCashOut';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCryptoCashOutRequest_4bfb8752c1::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCryptoCashOutResponse_216499b379::class;
}

final class AiobalePhpRpc_5d0912c718b4d5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'CryptoInvoice';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCryptoInvoiceRequest_c96d94c12b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCryptoInvoiceResponse_c4a4eb78be::class;
}

final class AiobalePhpRpc_83f3b2ea5e6639 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'CryptoPurchase';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCryptoPurchaseRequest_34170aeddd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCryptoPurchaseResponse_8d217ecef5::class;
}

final class AiobalePhpRpc_e5ed03bbe44125 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'CryptoRefund';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCryptoRefundRequest_8dd276bd6e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_752008e1813a65 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'CryptoTransfer';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCryptoTransferRequest_8c7453a368::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCryptoTransferResponse_8e040f6653::class;
}

final class AiobalePhpRpc_093015fe619034 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'GetChargePaymentToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetChargePaymentTokenRequest_4ebcbac987::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_v_98711_dc783da053::class;
}

final class AiobalePhpRpc_20c2fc311b1c48 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'GetCredit';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCreditRequest_316eb1723b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCreditResponse_d32b06b1bc::class;
}

final class AiobalePhpRpc_40a5dd4b0262c9 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'GetCryptoChargePaymentToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCryptoChargePaymentTokenRequest_0a8b0c2e9a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_v_98711_dc783da053::class;
}

final class AiobalePhpRpc_bd9cd1871caa3f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'GetCryptoWallets';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCryptoWalletsRequest_a4b6b8d2fb::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCryptoWalletsResponse_a53f393553::class;
}

final class AiobalePhpRpc_1d46cd175f877d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'GetKifpoolOwner';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetKifpoolOwnerRequest_157b724210::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetKifpoolOwnerResponse_426a47bbf6::class;
}

final class AiobalePhpRpc_b4f8a5a5d5827c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'GetKifpoolPointBalance';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetKifpoolPointBalanceRequest_6cff22f102::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetKifpoolPointBalanceResponse_dc20fb70c6::class;
}

final class AiobalePhpRpc_b8f5345c6f4cf5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'GetKifpoolPointDetails';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetKifpoolPointDetailsRequest_1083e1dc06::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetKifpoolPointDetailsResponse_c76c177ebd::class;
}

final class AiobalePhpRpc_9aa5dca564b14a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'GetKifpoolPointSummery';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetKifpoolPointSummeryRequest_78cda1b30a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetKifpoolPointSummeryResponse_554a56717c::class;
}

final class AiobalePhpRpc_a44f18305b2153 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'GetKifpoolTransactionPoint';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetKifpoolTransactionPointRequest_2f8ee3211b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetKifpoolTransactionPointResponse_66d8a3b8d5::class;
}

final class AiobalePhpRpc_5c9d0c817dcb5f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'Invoice';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebInvoiceRequest_29458a7da0::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebInvoiceResponse_7fc1f85d84::class;
}

final class AiobalePhpRpc_c4128b79f0c7af extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'PayForMessage';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebPayForMessageRequest_454fef9287::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebPayForMessageResponse_f4da19941c::class;
}

final class AiobalePhpRpc_d82d5e97d3c9ad extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'Purchase';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebPurchaseRequest_a7f458adcb::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebPurchaseResponse_7cad126dcd::class;
}

final class AiobalePhpRpc_e1ed8a6354fe64 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'PurchaseMessage';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebPurchaseMessageRequest_6764f7ed31::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebPurchaseMessageResponse_1a2bbe12b1::class;
}

final class AiobalePhpRpc_5f1f99c30e28da extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'PurchaseMessageWithCharge';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebPurchaseMessageWithChargeRequest_f20e32f29c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebPurchaseMessageWithChargeResponse_86afff7f10::class;
}

final class AiobalePhpRpc_5c6b25303c515e extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'PurchaseWithCharge';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebPurchaseWithChargeRequest_8ad54b291e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebPurchaseWithChargeResponse_946dd4b784::class;
}

final class AiobalePhpRpc_905aca74d21042 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'Transfer';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebTransferRequest_42d65dd7b7::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebTransferResponse_de5d77a320::class;
}

final class AiobalePhpRpc_aed688e6df94ad extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'UpgradeKifpool';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebUpgradeKifpoolRequest_09b01ef016::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebUpgradeKifpoolResponse_8fc12e8151::class;
}

final class AiobalePhpRpc_6f978c50926c32 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'VerifyCashOutKifpool';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebVerifyCashOutKifpoolRequest_36667944fd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebVerifyCashOutKifpoolResponse_24b3d241f8::class;
}

final class AiobalePhpRpc_145c23d31951bb extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'VerifyPurchaseMessage';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebVerifyPurchaseMessageRequest_503a7decc9::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebVerifyPurchaseMessageResponse_22495c9cf4::class;
}

final class AiobalePhpRpc_9d13c30ed0b2af extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.llm_auth.v1.LLMAuthService';
    protected const RPC_METHOD = 'GetAuthToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebExtLLMAuthServiceGetAuthTokenRequest_2223bf8b1a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebExtLLMAuthServiceGetAuthTokenResponse_e211244f66::class;
}

final class AiobalePhpRpc_0c3c72095ba431 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.magazine.v1.Magazine';
    protected const RPC_METHOD = 'GetMyUpvotes';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetMyUpvotesRequest_813aee5f6f::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetMyUpvotesResponse_11e57a0574::class;
}

final class AiobalePhpRpc_4c190e007b95eb extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.magazine.v1.Magazine';
    protected const RPC_METHOD = 'GetSimilarPosts';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetSimilarPostsRequest_80b1ff2b93::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetSimilarPostsResponse_984d9e8724::class;
}

final class AiobalePhpRpc_d94f17595b55fb extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.magazine.v1.Magazine';
    protected const RPC_METHOD = 'LoadCategories';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadCategoriesRequest_bd1ed5fbf3::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadCategoriesResponse_e32eeba4df::class;
}

final class AiobalePhpRpc_86f5280bc9fd87 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.magazine.v1.Magazine';
    protected const RPC_METHOD = 'LoadCategoryFeedMessages';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadCategoryFeedMessagesRequest_11e5790d6a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadCategoryFeedMessagesResponse_34970b357f::class;
}

final class AiobalePhpRpc_26912d51f98f05 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.magazine.v1.Magazine';
    protected const RPC_METHOD = 'LoadFeedMessages';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebT_O_54329_30d41e41d3::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_H_54329_6358782f73::class;
}

final class AiobalePhpRpc_e0ef4d27d84efd extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.magazine.v1.Magazine';
    protected const RPC_METHOD = 'LoadInternalFeedMessages';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebT_O_54329_30d41e41d3::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_H_54329_6358782f73::class;
}

final class AiobalePhpRpc_8a91db6151c0bf extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'AcceptCampaignMarket';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAcceptCampaignMarketRequest_88892cf8ef::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_76111be40fe5a9 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'AcceptMarketJoinRequest';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAcceptMarketJoinRequestRequest_a22e0de61b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_62539908a35fa8 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'CreateMarketJoinRequest';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCreateMarketJoinRequestRequest_3941163538::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCreateMarketJoinRequestResponse_5c3f832c4e::class;
}

final class AiobalePhpRpc_a254047e65d12c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'CreateTag';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCreateTagRequest_30d5fb78ae::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCreateTagResponse_a6b0992e45::class;
}

final class AiobalePhpRpc_72a50536090314 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'GetCategoriesList';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCategoriesListRequest_fdf7931851::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCategoriesListResponse_7e9ce78f63::class;
}

final class AiobalePhpRpc_6db276e180cba5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'GetCategoryMarkets';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCategoryMarketsRequest_ecfe3ff636::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCategoryMarketsResponse_a75529deb4::class;
}

final class AiobalePhpRpc_b6fe047cd6f585 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'GetCategoryProducts';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCategoryProductsRequest_3929c7d83a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCategoryProductsResponse_9d219ebbd1::class;
}

final class AiobalePhpRpc_b9816b9fbf9a14 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'GetIndexedProducts';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetIndexedProductsRequest_c328aa9f1e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetIndexedProductsResponse_41a86e156f::class;
}

final class AiobalePhpRpc_fe64db4a6bd5b5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'GetMarket';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetMarketRequest_ab39fe8d4c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetMarketResponse_3d74f37323::class;
}

final class AiobalePhpRpc_8d3abd84208cbc extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'GetMarketJoinRequests';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetMarketJoinRequestsRequest_e5008eae11::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetMarketJoinRequestsResponse_84118b7621::class;
}

final class AiobalePhpRpc_8fa0ca0d5b11ff extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'GetMarketsPendingJoinRequest';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetMarketsPendingJoinRequestRequest_2765322d88::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetMarketsPendingJoinRequestResponse_04366843c8::class;
}

final class AiobalePhpRpc_f3dd42b7ea1113 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'GetNumberOfSales';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetNumberOfSalesRequest_365566d362::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetNumberOfSalesResponse_7d0ce502ea::class;
}

final class AiobalePhpRpc_75d184be451827 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'GetOnboardingStatus';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetOnboardingStatusRequest_29087feed6::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetOnboardingStatusResponse_6b8b0415d8::class;
}

final class AiobalePhpRpc_5f6b54f2a9f959 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'GetPendingCampaignMarkets';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetPendingCampaignMarketsRequest_1bbf6b8385::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetPendingCampaignMarketsResponse_c7b33aced4::class;
}

final class AiobalePhpRpc_fbb0f88bf0c84b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'GetStores';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebT_sx_88717_0bd30b298e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_sG_88717_a56f2a9bf5::class;
}

final class AiobalePhpRpc_0922d1eed96920 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'GetTags';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetTagsRequest_fc4110dd81::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetTagsResponse_5b9c3c2e31::class;
}

final class AiobalePhpRpc_bf6d35e21fa589 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'GetTopMarkets';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetTopMarketsRequest_1d4043f9a2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetTopMarketsResponse_7822272f22::class;
}

final class AiobalePhpRpc_f6c1fdc5b09a0a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'GetYaldaStores';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebT_sx_88717_0bd30b298e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_sG_88717_a56f2a9bf5::class;
}

final class AiobalePhpRpc_2b05f31f864cdd extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'RejectCampaignMarket';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRejectCampaignMarketRequest_31a47c355d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_e176f58fce9cf7 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'RejectMarketJoinRequest';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRejectMarketJoinRequestRequest_a111a0ba0b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_6eb10f8bf2787f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'SetGenericDeepLinks';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetGenericDeepLinksRequest_c5e9a2c85a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_31eb9254c9ff0c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'SetMarketBanners';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetMarketBannersRequest_70dc8adf24::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_343c1ea7b3cf5b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'SetOnboardingData';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetOnboardingDataRequest_6951e17b60::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSetOnboardingDataResponse_994d4932a6::class;
}

final class AiobalePhpRpc_4cb36027e0a08d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'SetPopularSearches';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetPopularSearchesRequest_51f1bebbe2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_0ea9473b74da85 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'SubmitMarketFeedback';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSubmitMarketFeedbackRequest_09b6c585b1::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_ca5dda7d7f27fe extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.market.v1.Market';
    protected const RPC_METHOD = 'UpdateMarketInfo';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebUpdateMarketInfoRequest_30888544c8::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_7dc502aa113772 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.maviz.v1.MavizStream';
    protected const RPC_METHOD = 'GetDifference';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetDifferenceRequest_656ac4b3a0::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetDifferenceResponse_3cb9c0845b::class;
}

final class AiobalePhpRpc_941b91cb9516d9 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.maviz.v1.MavizStream';
    protected const RPC_METHOD = 'SubscribeToThreadUpdates';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSubscribeToThreadUpdatesRequest_014137a937::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_972082aa6848de extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.maviz.v1.MavizStream';
    protected const RPC_METHOD = 'UnsubscribeFromThreadUpdates';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebUnsubscribeFromThreadUpdatesRequest_497ce7e2dd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_1f1f2d8d5f8365 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'AcceptCall';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAcceptCallRequest_f197a3d233::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_h_14892_e4c546d3cf::class;
}

final class AiobalePhpRpc_78f3fc9d2d243c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'AnswerCallJoinRequest';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAnswerCallJoinRequestRequest_89fe5b40b9::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_6e6ecaf0e643a3 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'AskToJoinCall';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAskToJoinCallRequest_9a65b290cd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_4c9c440f8acc37 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'DeleteCallLogs';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebDeleteCallLogsRequest_bc025d5e51::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_18feb14f42c81b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'DeleteStream';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebDeleteStreamRequest_c4da1ea98f::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_dfdd9bdbfc1baa extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'DiscardCall';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebDiscardCallRequest_be50ee8645::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_h_14892_e4c546d3cf::class;
}

final class AiobalePhpRpc_7c245471205585 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'GenerateCallLink';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGenerateCallLinkRequest_f99249136d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGenerateCallLinkResponse_657a74867f::class;
}

final class AiobalePhpRpc_a64c43ee75f4a3 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'GetCallLinkDetails';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCallLinkDetailsRequest_327f9ef946::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCallLinkDetailsResponse_7fad061f75::class;
}

final class AiobalePhpRpc_66a3ec501363b5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'GetCallLogs';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCallLogsRequest_b1ec3e5bbf::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCallLogsResponse_407e9d875d::class;
}

final class AiobalePhpRpc_2a9f9cd2ae30f9 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'GetCallState';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCallStateRequest_763d86a26a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCallStateResponse_5c3ba34c16::class;
}

final class AiobalePhpRpc_68d32e5a687f81 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'GetGroupCall';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetGroupCallRequest_2a5a0e9c5f::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetGroupCallResponse_3a1309d1a1::class;
}

final class AiobalePhpRpc_81e8abc11d2e11 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'GetOngoingCalls';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetOngoingCallsRequest_49bac76dab::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetOngoingCallsResponse_c69dc0d21e::class;
}

final class AiobalePhpRpc_60fe23f2f7b024 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'GetWssURL';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetWssURLRequest_a8b0d72061::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetWssURLResponse_9b5898b602::class;
}

final class AiobalePhpRpc_f056e893eb41b6 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'InviteToCall';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebInviteToCallRequest_2148d2d1b5::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebInviteToCallResponse_accc42654b::class;
}

final class AiobalePhpRpc_19a4fdc514028c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'JoinGroupCall';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebJoinGroupCallRequest_f904f4235a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebJoinGroupCallResponse_be8815e967::class;
}

final class AiobalePhpRpc_1e59d95d4fcb6d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'LeaveGroupCall';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLeaveGroupCallRequest_1e1f988c92::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLeaveGroupCallResponse_4a19ffd616::class;
}

final class AiobalePhpRpc_14bae4c7669726 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'MuteParticipant';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebMuteParticipantRequest_fe286286df::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_0840410105ae68 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'ReceiveCall';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebReceiveCallRequest_7a736cb335::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_d3c3f91ba66a08 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'RemoveParticipant';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRemoveParticipantRequest_53cccfc675::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_2752bd9c39dbdf extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'SendCallReaction';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSendCallReactionRequest_b0f71d9846::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_3973f79335d9c5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'SendFanoosEvent';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSendFanoosEventRequest_0002ee1f09::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_9e959dba2094f0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'SetLinkTitle';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetLinkTitleRequest_37f87d4fc5::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_05cc5d07efa71a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'StartCall';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebStartCallRequest_7b71e8ee40::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_h_14892_e4c546d3cf::class;
}

final class AiobalePhpRpc_5c15ea5b3880f0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'StartGroupCall';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebStartGroupCallRequest_911d3914f5::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebStartGroupCallResponse_a5e042eb65::class;
}

final class AiobalePhpRpc_5aa5d74627f4d9 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'StartRecording';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebStartRecordingRequest_fdec711488::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_a7a2fb7dcb3027 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'StartStream';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebStartStreamRequest_68fd8501be::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebStartStreamResponse_534bf943b2::class;
}

final class AiobalePhpRpc_9aea4766c81e42 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'StopRecording';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebStopRecordingRequest_1e20f3ba09::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_e217221028468b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'SubmitCallFeedback';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSubmitCallFeedbackRequest_6af601c26b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_1edde7e9d42d81 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'TakeCallAction';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebTakeCallActionRequest_23d3c3cc04::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebTakeCallActionResponse_0629c7a48a::class;
}

final class AiobalePhpRpc_0cb831401f1024 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.meet.v1.Meet';
    protected const RPC_METHOD = 'UpdateLayout';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebUpdateLayoutRequest_9515ed5965::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_90178cc7259329 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.message_stream.v1.MessageStream';
    protected const RPC_METHOD = 'CancelMessageStream';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCancelMessageStreamRequest_63ee2250b8::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCancelMessageStreamResponse_ef68e28a7c::class;
}

final class AiobalePhpRpc_2aa868a1bb9633 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.message_stream.v1.MessageStream';
    protected const RPC_METHOD = 'ReceiveMessageStream';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebReceiveMessageStreamRequest_8523ac0fcb::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebReceiveMessageStreamResponse_79ac8d70a5::class;
}

final class AiobalePhpRpc_421378b1bdd472 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'ArchiveDialogs';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebArchiveDialogsRequest_19119ada7d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_9e1914537e659f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'CreateFolder';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCreateFolderRequest_91addbed75::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCreateFolderResponse_a081f391f5::class;
}

final class AiobalePhpRpc_b69641b943fc51 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'CreateReservedFolder';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCreateReservedFolderRequest_08a374a3a1::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCreateReservedFolderResponse_a2a47bacff::class;
}

final class AiobalePhpRpc_6f1a0d7778d5ef extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'CreateThread';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCreateThreadRequest_271e36b15a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCreateThreadResponse_7eb48a21da::class;
}

final class AiobalePhpRpc_d0dbf9bfb76b18 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'CreateTopic';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCreateTopicRequest_dc327128f4::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCreateTopicResponse_b9c6d75d79::class;
}

final class AiobalePhpRpc_478b738da1f775 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'DeleteFolder';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebDeleteFolderRequest_0b6e5a9721::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_4d564b02b5de82 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'DeleteTopic';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebDeleteTopicRequest_327381042e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_4d13fb43c664d2 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'EditFolder';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebEditFolderRequest_90a4fccedf::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebEditFolderResponse_ee49ebc249::class;
}

final class AiobalePhpRpc_49b615a948b207 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'EditTopic';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebEditTopicRequest_3a7ccf84ce::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_6f6bff1fbea5ba extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'FetchProtectedMessage';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebFetchProtectedMessageRequest_fe17e36148::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebFetchProtectedMessageResponse_a3e6b8d41a::class;
}

final class AiobalePhpRpc_8911be2a189e30 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'GetDiscussionMessage';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetDiscussionMessageRequest_54de4663fd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetDiscussionMessageResponse_cdbd1276dc::class;
}

final class AiobalePhpRpc_2fa624703c6ac3 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'GetMessagesRepliesInfo';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetMessagesRepliesInfoRequest_664e00ae3b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetMessagesRepliesInfoResponse_d7ac87cd5a::class;
}

final class AiobalePhpRpc_d405f7a2d02287 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'GetTopicByID';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetTopicByIDRequest_edb1b74709::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetTopicByIDResponse_5bb8e0d2fd::class;
}

final class AiobalePhpRpc_4b0a8ffd0f5a00 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'GetTopics';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetTopicsRequest_92ff23f244::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetTopicsResponse_f2ecedee86::class;
}

final class AiobalePhpRpc_4dba22765f568b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'LoadFolderDialogs';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadFolderDialogsRequest_c88349f4e3::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadFolderDialogsResponse_2a109544c8::class;
}

final class AiobalePhpRpc_0d946331a566ef extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'LoadFolders';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadFoldersRequest_ca5c789daa::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadFoldersResponse_b631dff109::class;
}

final class AiobalePhpRpc_84a5b20cbca579 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'LoadGroupedDialogs';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadGroupedDialogsRequest_cdb5e55286::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadGroupedDialogsResponse_6cfcba1367::class;
}

final class AiobalePhpRpc_e096532227ef9a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'LoadPeerDialogs';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadPeerDialogsRequest_7087d65a4c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadPeerDialogsResponse_13801da06d::class;
}

final class AiobalePhpRpc_e1d88bc508d740 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'LoadPeers';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadPeersRequest_fd007765b7::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadPeersResponse_202deebf6b::class;
}

final class AiobalePhpRpc_803bfa9448be1d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'LoadPinnedDialogs';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadPinnedDialogsRequest_a84ea10d6e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadPinnedDialogsResponse_fbbdff43d8::class;
}

final class AiobalePhpRpc_7335e7275b84dd extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'LoadReplies';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadRepliesRequest_bf30d6afe7::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadRepliesResponse_a7492cfe9d::class;
}

final class AiobalePhpRpc_7aca0365c9a35d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'MarkDialogsAsRead';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebMarkDialogsAsReadRequest_521e5f08e2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_B__6d4be364ab::class;
}

final class AiobalePhpRpc_da416997ade4ab extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'MarkDialogsAsUnread';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebMarkDialogsAsUnreadRequest_d9cc4241de::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_B__6d4be364ab::class;
}

final class AiobalePhpRpc_5f60fdb80204f5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'MentionRead';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebMentionReadRequest_a8a00f4b46::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_b58720084ca893 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'MessageReceived';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebMessageReceivedRequest_4e1946701a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_cf02b00c148a29 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'PinDialogs';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebPinDialogsRequest_c06a4b0b9a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebPinDialogsResponse_9b54cf28cc::class;
}

final class AiobalePhpRpc_de6e319ab92c27 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'ReorderFolders';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebReorderFoldersRequest_8cdb310e8a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebReorderFoldersResponse_3540d69f92::class;
}

final class AiobalePhpRpc_614f81877080f7 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'ReorderPinnedDialogs';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebReorderPinnedDialogsRequest_77a6876404::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebReorderPinnedDialogsResponse_4b8df75475::class;
}

final class AiobalePhpRpc_0061cb5769dd99 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'SendMultiMediaMessage';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_struct_WebSendMultiMediaMessageRequest_73ea317c6d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_pQ_8a12566ff5::class;
}

final class AiobalePhpRpc_46add2b5bb9784 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'UnArchiveDialogs';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebUnArchiveDialogsRequest_eb4b67af7b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_ff3c521f38f2c6 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.messaging.v2.Messaging';
    protected const RPC_METHOD = 'UnpinDialogs';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebUnpinDialogsRequest_661b97cf6c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_8616512b193469 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.microbanki.v1.MicroBanki';
    protected const RPC_METHOD = 'GetBamServiceToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetBamServiceTokenRequest_c23feebc44::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetBamServiceTokenResponse_2704044c88::class;
}

final class AiobalePhpRpc_154dd193a4b7aa extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.microbanki.v1.MicroBanki';
    protected const RPC_METHOD = 'GetMoneyRequestDetails';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetMoneyRequestDetailsRequest_aab3c63c97::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetMoneyRequestDetailsResponse_54ac6823ee::class;
}

final class AiobalePhpRpc_be2b0a608a5641 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.microbanki.v1.MicroBanki';
    protected const RPC_METHOD = 'GetMoneyRequestPaymentList';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetMoneyRequestPaymentListRequest_7ae69c28dc::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetMoneyRequestPaymentListResponse_7d253f0e3c::class;
}

final class AiobalePhpRpc_8f291d2047a57b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.my_bank.v1.MyBank';
    protected const RPC_METHOD = 'GetMyBank';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebExtMyBankGetMyBankRequest_8426570d00::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebExtMyBankGetMyBankResponse_1f2a321a73::class;
}

final class AiobalePhpRpc_0324e31544be16 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.negah.v1.Negah';
    protected const RPC_METHOD = 'GetMessageSeenList';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebExtNegahGetMessageSeenListRequest_f8137a06ae::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebExtNegahGetMessageSeenListResponse_e98f84ce51::class;
}

final class AiobalePhpRpc_24161cb4dacdfa extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.organizations.v1.Organizations';
    protected const RPC_METHOD = 'GetUserOrganizationInfo';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUserOrganizationInfoRequest_6ad4b05bfb::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUserOrganizationInfoResponse_8da3d8963e::class;
}

final class AiobalePhpRpc_8053779b955c49 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.organizations.v1.Organizations';
    protected const RPC_METHOD = 'GetUserOrganizationalContacts';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUserOrganizationalContactsRequest_aeccb16029::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUserOrganizationalContactsResponse_f68e11e055::class;
}

final class AiobalePhpRpc_dfe1ac4fc3a875 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.pfm.v1.Pfm';
    protected const RPC_METHOD = 'AddDetailToTransaction';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAddDetailToTransactionRequest_57b8841ed2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_0b86dd90cfb09f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.pfm.v1.Pfm';
    protected const RPC_METHOD = 'AddTransactionTags';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAddTransactionTagsRequest_cf1386309f::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_dc62bde521a955 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.pfm.v1.Pfm';
    protected const RPC_METHOD = 'AddUserTags';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAddUserTagsRequest_8c1c5b29d9::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_966705f1d35de0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.pfm.v1.Pfm';
    protected const RPC_METHOD = 'FilterTaggedTransactions';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebFilterTaggedTransactionsRequest_4bb1b1e5c8::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebFilterTaggedTransactionsResponse_e4775f594a::class;
}

final class AiobalePhpRpc_f3c7c94461556b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.pfm.v1.Pfm';
    protected const RPC_METHOD = 'GetSubTransactions';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetSubTransactionsRequest_b634275cf8::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetSubTransactionsResponse_4de063f406::class;
}

final class AiobalePhpRpc_6b1c445ae2d55b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.pfm.v1.Pfm';
    protected const RPC_METHOD = 'GetTransactionTags';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetTransactionTagsRequest_fb3263fe09::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetTransactionTagsResponse_207dc43de0::class;
}

final class AiobalePhpRpc_c9cbe21302f1c7 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.pfm.v1.Pfm';
    protected const RPC_METHOD = 'GetUserAccounts';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUserAccountsRequest_38ae4671fd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUserAccountsResponse_e66b5a1b11::class;
}

final class AiobalePhpRpc_1d401928b62714 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.pfm.v1.Pfm';
    protected const RPC_METHOD = 'GetUserTags';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUserTagsRequest_a8dcc63d7c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUserTagsResponse_5808b76688::class;
}

final class AiobalePhpRpc_e76272167679b1 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.pfm.v1.Pfm';
    protected const RPC_METHOD = 'LoadTransactions';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadTransactionsRequest_a2b67f001a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadTransactionsResponse_1b499a27ee::class;
}

final class AiobalePhpRpc_548c0997446e4a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.pfm.v1.Pfm';
    protected const RPC_METHOD = 'LoadTransactionsByIDs';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadTransactionsByIDsRequest_9d10c4fdb6::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadTransactionsByIDsResponse_a5598f0498::class;
}

final class AiobalePhpRpc_6e25bce9455919 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.pfm.v1.Pfm';
    protected const RPC_METHOD = 'RemoveTransaction';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRemoveTransactionRequest_90370d0dea::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_f74af3cba48df0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.pfm.v1.Pfm';
    protected const RPC_METHOD = 'RemoveTransactionTags';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRemoveTransactionTagsRequest_9f3f3c31e1::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_9cc33999405310 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.pfm.v1.Pfm';
    protected const RPC_METHOD = 'RemoveUserTags';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRemoveUserTagsRequest_b00b59be1c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_a8ecb89a62adb9 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.pfm.v1.Pfm';
    protected const RPC_METHOD = 'ReviveTransaction';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebReviveTransactionRequest_2afd26fc6f::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_80a4b01873dc12 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.pfm.v1.Pfm';
    protected const RPC_METHOD = 'SplitTransaction';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSplitTransactionRequest_bb1694f4b6::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSplitTransactionResponse_b2316bf468::class;
}

final class AiobalePhpRpc_a919dcd80249bd extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.poll.v1.Poll';
    protected const RPC_METHOD = 'ClosePoll';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebClosePollRequest_028ebce55d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_ef2210807c5b71 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.poll.v1.Poll';
    protected const RPC_METHOD = 'CreatePoll';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCreatePollRequest_a1262366d2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCreatePollResponse_0b34b658c5::class;
}

final class AiobalePhpRpc_630f0ac67af286 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.poll.v1.Poll';
    protected const RPC_METHOD = 'GetFullPollResult';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetFullPollResultRequest_dcdedcd620::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetFullPollResultResponse_cfb0c4e6ce::class;
}

final class AiobalePhpRpc_ccd47f1a839839 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.poll.v1.Poll';
    protected const RPC_METHOD = 'GetPollResults';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetPollResultsRequest_3fcf61329e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetPollResultsResponse_d60352b689::class;
}

final class AiobalePhpRpc_b9206f54d40bb3 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.poll.v1.Poll';
    protected const RPC_METHOD = 'Vote';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebVoteRequest_abc017d547::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebVoteResponse_e2c174ff3a::class;
}

final class AiobalePhpRpc_23bdc4f9eb2a00 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.premium.v1.Premium';
    protected const RPC_METHOD = 'CalculateDiscountedPrice';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCalculateDiscountedPriceRequest_409e18d92c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCalculateDiscountedPriceResponse_922a6e4347::class;
}

final class AiobalePhpRpc_f5d2d9c587865b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.premium.v1.Premium';
    protected const RPC_METHOD = 'GetBadges';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetBadgesRequest_f1d5fa5b5e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetBadgesResponse_3fc9e2c775::class;
}

final class AiobalePhpRpc_762c30cbbc0e7e extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.premium.v1.Premium';
    protected const RPC_METHOD = 'GetPackages';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetPackagesRequest_0a888de730::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetPackagesResponse_fd04ed9e0a::class;
}

final class AiobalePhpRpc_b8fc52cac977ea extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.premium.v1.Premium';
    protected const RPC_METHOD = 'IsPremium';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebIsPremiumRequest_bec0da74f0::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebIsPremiumResponse_f08f3b8241::class;
}

final class AiobalePhpRpc_1b98dd58f13158 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.premium.v1.Premium';
    protected const RPC_METHOD = 'IsPremiumBatch';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebIsPremiumBatchRequest_509e806ce4::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebIsPremiumBatchResponse_404c45b70f::class;
}

final class AiobalePhpRpc_49100ace950dc8 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.premium.v1.Premium';
    protected const RPC_METHOD = 'PurchasePackage';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebPurchasePackageRequest_bcc655b22d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebPurchasePackageResponse_02dca0a876::class;
}

final class AiobalePhpRpc_61a24c4f8e587e extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.premium.v1.Premium';
    protected const RPC_METHOD = 'SetUserBadge';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetUserBadgeRequest_fe4bea0eb5::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_9ff4ecf26946be extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.presence.v1.Presence';
    protected const RPC_METHOD = 'GetContactsPresences';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetContactsPresencesRequest_15c9fc4bfa::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetContactsPresencesResponse_82e641f737::class;
}

final class AiobalePhpRpc_12989aeea50214 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.presence.v1.Presence';
    protected const RPC_METHOD = 'GetGroupMembersPresences';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetGroupMembersPresencesRequest_96fd4b2dcb::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetGroupMembersPresencesResponse_ea2277ec28::class;
}

final class AiobalePhpRpc_b0c1d8dea17622 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.presence.v1.Presence';
    protected const RPC_METHOD = 'GetGroupOnlineCount';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetGroupOnlineCountRequest_9d39b52798::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetGroupOnlineCountResponse_a1f8f89eef::class;
}

final class AiobalePhpRpc_c0c535ecc1bd38 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.presence.v1.Presence';
    protected const RPC_METHOD = 'GetUsersPresence';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUsersPresenceRequest_c5b1b0d40f::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUsersPresenceResponse_70d28c1fac::class;
}

final class AiobalePhpRpc_4332b4dd7951d9 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.presence.v1.Presence';
    protected const RPC_METHOD = 'SubscribeFromGroupOnline';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSubscribeFromGroupOnlineRequest_0c436f6d6c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_62cf4678b3081b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.presence.v1.Presence';
    protected const RPC_METHOD = 'SubscribeFromOnline';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSubscribeFromOnlineRequest_20d0114a66::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_7998343593bde7 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.presence.v1.Presence';
    protected const RPC_METHOD = 'SubscribeToGroupOnline';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSubscribeToGroupOnlineRequest_328e97fe06::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_f2c71d0832bda5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.presence.v1.Presence';
    protected const RPC_METHOD = 'SubscribeToOnline';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSubscribeToOnlineRequest_63d53dc4f2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_d055d29b00e461 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ramz.v1.Ramz';
    protected const RPC_METHOD = 'CheckPassword';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCheckPasswordRequest_26577d385c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCheckPasswordResponse_c14d28cd10::class;
}

final class AiobalePhpRpc_493eeeec159cee extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ramz.v1.Ramz';
    protected const RPC_METHOD = 'CheckPasswordSet';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCheckPasswordSetRequest_76628bad0d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCheckPasswordSetResponse_8d0efd05ed::class;
}

final class AiobalePhpRpc_1b36fe20978c7b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ramz.v1.Ramz';
    protected const RPC_METHOD = 'DeletePassword';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebDeletePasswordRequest_89e4b148ad::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebDeletePasswordResponse_d6d3b25829::class;
}

final class AiobalePhpRpc_f801596988a12e extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ramz.v1.Ramz';
    protected const RPC_METHOD = 'ForgetPassword';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebForgetPasswordRequest_ec71af3109::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebForgetPasswordResponse_859b84e3c7::class;
}

final class AiobalePhpRpc_c8ef1a517f761f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ramz.v1.Ramz';
    protected const RPC_METHOD = 'SendOTP';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSendOTPRequest_262349b974::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSendOTPResponse_37478c4a24::class;
}

final class AiobalePhpRpc_62c28dcb152fa0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ramz.v1.Ramz';
    protected const RPC_METHOD = 'SetPassword';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetPasswordRequest_590fa5791b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSetPasswordResponse_db68a7681a::class;
}

final class AiobalePhpRpc_a36f4c57e728bb extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.ramz.v1.Ramz';
    protected const RPC_METHOD = 'ValidateOTP';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebValidateOTPRequest_bfb5dcf52d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebValidateOTPResponse_96caa7fb5c::class;
}

final class AiobalePhpRpc_06472d6206300d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.recommender.v1.Recommender';
    protected const RPC_METHOD = 'GetChannelRecommendations';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetChannelRecommendationsRequest_2f938d2ecb::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetChannelRecommendationsResponse_37bc6d0478::class;
}

final class AiobalePhpRpc_8bc88b37f16029 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.recommender.v1.Recommender';
    protected const RPC_METHOD = 'GetGroupsRecommendation';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetGroupsRecommendationRequest_738690a63c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetGroupsRecommendationResponse_21504d8adc::class;
}

final class AiobalePhpRpc_5dd692ecc7e359 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.recommender.v1.Recommender';
    protected const RPC_METHOD = 'GetRelatedChannels';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetRelatedChannelsRequest_8de976dfab::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetRelatedChannelsResponse_aa5090c5b0::class;
}

final class AiobalePhpRpc_0b2b9da845ac34 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.recommender.v1.Recommender';
    protected const RPC_METHOD = 'GetRelatedGroups';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetRelatedGroupsRequest_82cad21981::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetRelatedGroupsResponse_8f4d460cf4::class;
}

final class AiobalePhpRpc_c7d9513753f67a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.report.v1.Report';
    protected const RPC_METHOD = 'ReportDismiss';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebReportDismissRequest_d242e5b0df::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_1db70a6bfdafe2 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sap.v1.Sap';
    protected const RPC_METHOD = 'AddDestinationCards';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAddDestinationCardsRequest_f7c3b4c8e7::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebAddDestinationCardsResponse_9a256a18cb::class;
}

final class AiobalePhpRpc_26a560b0f54043 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sap.v1.Sap';
    protected const RPC_METHOD = 'AddNewCards';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAddNewCardsRequest_b16cd10f1f::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebAddNewCardsResponse_3ea964415a::class;
}

final class AiobalePhpRpc_ecc7b4b890ec5b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sap.v1.Sap';
    protected const RPC_METHOD = 'DeliverOtp';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebDeliverOtpRequest_f967375a62::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebDeliverOtpResponse_67bc866b2d::class;
}

final class AiobalePhpRpc_33abd56b3f01dc extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sap.v1.Sap';
    protected const RPC_METHOD = 'EditCardExpirationDate';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebEditCardExpirationDateRequest_64f9a52956::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_45abd0d61f0336 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sap.v1.Sap';
    protected const RPC_METHOD = 'EnrollNewCard';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebEnrollNewCardRequest_58872b8210::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebEnrollNewCardResponse_63ef8062e7::class;
}

final class AiobalePhpRpc_23cc1290d0def4 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sap.v1.Sap';
    protected const RPC_METHOD = 'GetCardInfo';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCardInfoRequest_0bbff68559::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCardInfoResponse_f0ed0ae112::class;
}

final class AiobalePhpRpc_2e84a48e5a60ba extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sap.v1.Sap';
    protected const RPC_METHOD = 'GetCards';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetCardsRequest_ea2df7bbbb::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetCardsResponse_3735ed0993::class;
}

final class AiobalePhpRpc_58173bb91ecf75 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sap.v1.Sap';
    protected const RPC_METHOD = 'GetDefaultCard';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetDefaultCardRequest_fec5991bad::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetDefaultCardResponse_86535e1c21::class;
}

final class AiobalePhpRpc_138b092f3aef67 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sap.v1.Sap';
    protected const RPC_METHOD = 'GetDestinationCardInfo';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetDestinationCardInfoRequest_701ce5ae67::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetDestinationCardInfoResponse_276dae06e7::class;
}

final class AiobalePhpRpc_1913014880f632 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sap.v1.Sap';
    protected const RPC_METHOD = 'GetDestinationCards';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetDestinationCardsRequest_950f5b8eca::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetDestinationCardsResponse_8e3fb0a620::class;
}

final class AiobalePhpRpc_de6b397bc801ed extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sap.v1.Sap';
    protected const RPC_METHOD = 'ReactivateApp';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebReactivateAppRequest_d2a27dff8e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebReactivateAppResponse_50ad3112aa::class;
}

final class AiobalePhpRpc_727a2606a236c9 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sap.v1.Sap';
    protected const RPC_METHOD = 'RemoveCard';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRemoveCardRequest_5a96e61d8a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_285bb5fe9afb35 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sap.v1.Sap';
    protected const RPC_METHOD = 'RemoveDefaultCard';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRemoveDefaultCardRequest_227354d51b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_a68f8d078e8d6d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sap.v1.Sap';
    protected const RPC_METHOD = 'RemoveDestinationCards';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRemoveDestinationCardsRequest_8ac4739ea9::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_cf42df2f14c598 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sap.v1.Sap';
    protected const RPC_METHOD = 'SetDefaultCard';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetDefaultCardRequest_e2f8eafa5b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_01760d5013a286 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sap.v1.Sap';
    protected const RPC_METHOD = 'TransferMoneyByCard';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebTransferMoneyByCardRequest_02c78bb755::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebTransferMoneyByCardResponse_d5d8542b2a::class;
}

final class AiobalePhpRpc_e5d2be603ff61f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.schedule.v1.Scheduler';
    protected const RPC_METHOD = 'ExecuteTaskNow';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebExecuteTaskNowRequest_f486e133dd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_56af6c5bbced24 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.schedule.v1.Scheduler';
    protected const RPC_METHOD = 'ListTasks';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebListTasksRequest_29fbc7ebcc::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebListTasksResponse_7db9b082e5::class;
}

final class AiobalePhpRpc_24d0665559da54 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.schedule.v1.Scheduler';
    protected const RPC_METHOD = 'PeersWithScheduleTask';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebPeersWithScheduleTaskRequest_196192d449::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebPeersWithScheduleTaskResponse_6a0331ada6::class;
}

final class AiobalePhpRpc_a5af95583262df extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.schedule.v1.Scheduler';
    protected const RPC_METHOD = 'ReScheduleTask';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebReScheduleTaskRequest_125a830619::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_8d578e65db3a33 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.schedule.v1.Scheduler';
    protected const RPC_METHOD = 'ScheduleTask';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebScheduleTaskRequest_f477fc7801::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebScheduleTaskResponse_aa95111688::class;
}

final class AiobalePhpRpc_cd19417c57e5f1 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.schedule.v1.Scheduler';
    protected const RPC_METHOD = 'UnScheduleTask';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebUnScheduleTaskRequest_56fd8b5b36::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebUnScheduleTaskResponse_637ed0ad94::class;
}

final class AiobalePhpRpc_fd6632bbadaa21 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.search.v1.Search';
    protected const RPC_METHOD = 'RecommendPeer';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRecommendPeerRequest_9eded2622f::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebRecommendPeerResponse_bd4ce13fc0::class;
}

final class AiobalePhpRpc_ac1a14e433b338 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.search.v1.Search';
    protected const RPC_METHOD = 'SearchContent';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSearchContentRequest_2f257731df::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSearchContentResponse_7cd3df80f6::class;
}

final class AiobalePhpRpc_d9f145bdac371f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.search.v1.Search';
    protected const RPC_METHOD = 'SearchDialog';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSearchDialogRequest_0a241d31af::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSearchDialogResponse_1ff6f813b0::class;
}

final class AiobalePhpRpc_039e2f6fd30346 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.search.v1.Search';
    protected const RPC_METHOD = 'SearchMarket';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSearchMarketRequest_e2a5091e19::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSearchMarketResponse_b51f982110::class;
}

final class AiobalePhpRpc_e167a06996f379 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.search.v1.Search';
    protected const RPC_METHOD = 'SearchMarketPopular';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSearchMarketPopularRequest_062f5935fb::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSearchMarketPopularResponse_70bc0a212b::class;
}

final class AiobalePhpRpc_1e910e1ad39cd1 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.search.v1.Search';
    protected const RPC_METHOD = 'SearchMedia';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSearchMediaRequest_e5fdfe8910::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSearchMediaResponse_92925aaccb::class;
}

final class AiobalePhpRpc_9cd739e0b806a4 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.search.v1.Search';
    protected const RPC_METHOD = 'SearchMembers';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSearchMembersRequest_e9fba94ccd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSearchMembersResponse_2ee6252814::class;
}

final class AiobalePhpRpc_520e5f8487d050 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.search.v1.Search';
    protected const RPC_METHOD = 'SearchMessageMore';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSearchMessageMoreRequest_a30a515210::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_iF_88717_6e3726425b::class;
}

final class AiobalePhpRpc_f1e754fe916a9d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.search.v1.Search';
    protected const RPC_METHOD = 'SearchMessages';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSearchMessagesRequest_3d3f6711cd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_iF_88717_6e3726425b::class;
}

final class AiobalePhpRpc_eed3e984e41703 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.search.v1.Search';
    protected const RPC_METHOD = 'SearchPeer';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSearchPeerRequest_e4cdc28769::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSearchPeerResponse_04870ad815::class;
}

final class AiobalePhpRpc_9a42dad847be35 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.search.v1.Search';
    protected const RPC_METHOD = 'SearchProduct';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSearchProductRequest_2c51840c03::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSearchProductResponse_90e6eb35db::class;
}

final class AiobalePhpRpc_c54ff4fc6d126a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.search.v1.Search';
    protected const RPC_METHOD = 'UpdateSearchContentClick';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebUpdateSearchContentClickRequest_aae8524b93::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_8ae11b5c3c1efa extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.shared_media.v1.SharedMediaService';
    protected const RPC_METHOD = 'GetActiveSharedMedia';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetActiveSharedMediaRequest_23ef6864a1::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetActiveSharedMediaResponse_b6dd9cf18f::class;
}

final class AiobalePhpRpc_e25a508f4cc37b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.shared_media.v1.SharedMediaService';
    protected const RPC_METHOD = 'LoadMedia';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadMediaRequest_8542e26dfc::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadMediaResponse_efac6a69bd::class;
}

final class AiobalePhpRpc_279b0c84ed0f9c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'AddBotStory';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAddBotStoryRequest_0f81935cfb::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_u_70056_1b7f345d7f::class;
}

final class AiobalePhpRpc_77c8bdbaa9fdeb extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'AddChannelStory';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAddChannelStoryRequest_eb21df9b46::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_u_70056_1b7f345d7f::class;
}

final class AiobalePhpRpc_ac82dd260a688e extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'AddStory';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAddStoryRequest_4a415c726a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_u_70056_1b7f345d7f::class;
}

final class AiobalePhpRpc_324826bef3e331 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'CanAddBotStory';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCanAddBotStoryRequest_a09ff5d84a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebCanAddBotStoryResponse_8bc8fc0746::class;
}

final class AiobalePhpRpc_bf9aea28f1b195 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'CheckLinkValidity';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCheckLinkValidityRequest_8238386dcb::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_5f830e56c3dbbe extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'GetBotStories';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetBotStoriesRequest_4621afebd5::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetBotStoriesResponse_23198d2b3a::class;
}

final class AiobalePhpRpc_f21a5c1f35e63c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'GetChannelStories';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetChannelStoriesRequest_ff45b0e45d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetChannelStoriesResponse_61bebfe8fb::class;
}

final class AiobalePhpRpc_70226567300bba extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'GetDefaultStoryBackgrounds';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetDefaultStoryBackgroundsRequest_bcde1e7cfc::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetDefaultStoryBackgroundsResponse_8e2c281896::class;
}

final class AiobalePhpRpc_a20d973c288c8a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'GetMostPopularStories';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetMostPopularStoriesRequest_96c462f70a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetMostPopularStoriesResponse_b56837ae5f::class;
}

final class AiobalePhpRpc_7e4904db879ef8 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'GetStories';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetStoriesRequest_0ac892315d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetStoriesResponse_215c685f4f::class;
}

final class AiobalePhpRpc_ad630b8ae0a085 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'GetStoriesByList';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetStoriesByListRequest_1b7d625062::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetStoriesByListResponse_91e47fd9c5::class;
}

final class AiobalePhpRpc_cce73c88a20fd2 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'GetStoryById';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetStoryByIdRequest_ddd8ab8659::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetStoryByIdResponse_c674d82ce5::class;
}

final class AiobalePhpRpc_b8c7caaac33064 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'GetStoryReactionEmojis';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetStoryReactionEmojisRequest_1c3658f8d9::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetStoryReactionEmojisResponse_c72573cb83::class;
}

final class AiobalePhpRpc_220c2991089cd0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'GetStoryTags';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetStoryTagsRequest_e99769b72c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetStoryTagsResponse_2951234ce8::class;
}

final class AiobalePhpRpc_8f331e57ed9ea8 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'GetStoryWidgets';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetStoryWidgetsRequest_d58c651f04::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetStoryWidgetsResponse_de87edc355::class;
}

final class AiobalePhpRpc_4a0b123c4666cd extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'GetUserPrivacyConfig';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUserPrivacyConfigRequest_552a8d72e6::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUserPrivacyConfigResponse_3bafae7cde::class;
}

final class AiobalePhpRpc_f2973aa21a8a6c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'GetUserStoryConfig';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUserStoryConfigRequest_3af6c356f2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUserStoryConfigResponse_7fa315b40f::class;
}

final class AiobalePhpRpc_5c9dc41d3b1bc7 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'GetViewers';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetViewersRequest_5731a69ca9::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetViewersResponse_7efe2c88f2::class;
}

final class AiobalePhpRpc_c278e90fed23a5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'GetViewersCount';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetViewersCountRequest_1bd4317d14::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetViewersCountResponse_c75c5d79ec::class;
}

final class AiobalePhpRpc_9c38abb34cb316 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'ReactToStory';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebReactToStoryRequest_bb185611ef::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_5382a6fe0a394d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'RemoveStory';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRemoveStoryRequest_00e2e555ca::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_6ff63ba1ce6802 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'SetUserPrivacyConfig';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetUserPrivacyConfigRequest_0cb35864cc::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSetUserPrivacyConfigResponse_257d32456e::class;
}

final class AiobalePhpRpc_4e4f7c0e7a365a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'SetUserStoryConfig';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetUserStoryConfigRequest_d1b7a69d28::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSetUserStoryConfigResponse_5de338f912::class;
}

final class AiobalePhpRpc_53a2fe60242faa extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.timche.v1.Timche';
    protected const RPC_METHOD = 'AskBotReviewCallback';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAskBotReviewCallbackRequest_1beeb01b73::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebAskBotReviewCallbackResponse_473d896535::class;
}

final class AiobalePhpRpc_d2eaca973dfd35 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.timche.v1.Timche';
    protected const RPC_METHOD = 'GetBotPage';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetBotPageRequest_067bbabb91::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetBotPageResponse_d1bfc6cb1f::class;
}

final class AiobalePhpRpc_2a617ad564cdae extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.timche.v1.Timche';
    protected const RPC_METHOD = 'GetHomePage';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetHomePageRequest_2af29097a9::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetHomePageResponse_8f9e6b5912::class;
}

final class AiobalePhpRpc_9b056d2d04b583 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.timche.v1.Timche';
    protected const RPC_METHOD = 'GetSectionPage';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetSectionPageRequest_5ec9bf3c2d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetSectionPageResponse_c69e91a33b::class;
}

final class AiobalePhpRpc_2e225cf8cf18cc extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.timche.v1.Timche';
    protected const RPC_METHOD = 'SubmitReview';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSubmitReviewRequest_f07a197fdc::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebSubmitReviewResponse_5b1e358890::class;
}

final class AiobalePhpRpc_2aec3099f9f41a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.tldr.v1.TLDR';
    protected const RPC_METHOD = 'GetLinkPreview';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetLinkPreviewRequest_ce28e83093::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetLinkPreviewResponse_6d113ae34b::class;
}

final class AiobalePhpRpc_ebafacdc0b9f99 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.tldr.v1.TLDR';
    protected const RPC_METHOD = 'GetLinkSummary';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetLinkSummaryRequest_67f03b1522::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetLinkSummaryResponse_f228e30048::class;
}

final class AiobalePhpRpc_ca712dbe60f802 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.top_peer.v1.TopPeer';
    protected const RPC_METHOD = 'GetTopPeer';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetTopPeerRequest_bfa7675d94::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetTopPeerResponse_a55b6ed185::class;
}

final class AiobalePhpRpc_607c59cb574e69 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.top_peer.v1.TopPeer';
    protected const RPC_METHOD = 'RemovePeer';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRemovePeerRequest_f28fc3a50d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebRemovePeerResponse_710430d023::class;
}

final class AiobalePhpRpc_e728c33e9e7494 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.turing.v1.AI';
    protected const RPC_METHOD = 'GetTranscript';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetTranscriptRequest_be344950e7::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetTranscriptResponse_2700ca097c::class;
}

final class AiobalePhpRpc_8d88971dbef443 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.turing.v1.AI';
    protected const RPC_METHOD = 'SendEvent';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSendEventRequest_6d09abe809::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_b032d910e64849 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'AddCard';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAddCardRequest_9cbe137564::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_f87f721078394d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'ChangeDefaultCardNumber';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebChangeDefaultCardNumberRequest_954b384b46::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_B__6d4be364ab::class;
}

final class AiobalePhpRpc_d8c791606b9736 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'ChangePhoneNumber';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebChangePhoneNumberRequest_59cdb23bbc::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_34e7746902e310 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'ConfirmPhoneNumber';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebConfirmPhoneNumberRequest_b3cce77fa8::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_1f2777136d1976 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'EditAvatar';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebEditAvatarRequest_22e8fad886::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebEditAvatarResponse_0c9fad4adc::class;
}

final class AiobalePhpRpc_6a38bd8ed92e65 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'EditBirthDate';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebEditBirthDateRequest_700762a5de::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_db036ee030e28b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'EditMyPreferredLanguages';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebEditMyPreferredLanguagesRequest_437e48f18a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_B__6d4be364ab::class;
}

final class AiobalePhpRpc_b5511bd6b364fc extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'EditMyTimeZone';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebEditMyTimeZoneRequest_a462fa0fa7::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_B__6d4be364ab::class;
}

final class AiobalePhpRpc_c6ce74f3822896 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'EditSex';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebEditSexRequest_296eae7a19::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_1e787d81915d42 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'GetFullUser';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetFullUserRequest_38aa36bbe5::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetFullUserResponse_efa8000000::class;
}

final class AiobalePhpRpc_2fbb59ed6c35ca extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'GetUserFullPrivacy';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUserFullPrivacyRequest_01c25eb958::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUserFullPrivacyResponse_02c23f28dd::class;
}

final class AiobalePhpRpc_cec0690f2f8fb3 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'GetUserPrivacyStatus';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUserPrivacyStatusRequest_38e135c768::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUserPrivacyStatusResponse_7c4ba300fa::class;
}

final class AiobalePhpRpc_3e5c24b3133558 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'GetUsersDefaultCardNumber';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetUsersDefaultCardNumberRequest_2b4fb7dc51::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetUsersDefaultCardNumberResponse_7ff46a5277::class;
}

final class AiobalePhpRpc_67e962c920d848 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'IsNameAllowed';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebIsNameAllowedRequest_135d4108cf::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebBoolValue_5720e8ccf1::class;
}

final class AiobalePhpRpc_08b51ef53be31b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'LoadAvatars';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadAvatarsRequest_d1e1218cc3::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadAvatarsResponse_686f4efc19::class;
}

final class AiobalePhpRpc_de61c963ca41a6 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'LoadFullUsersSequentially';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebT_z_53871_34d611b3b8::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_q_53871_09aa18910e::class;
}

final class AiobalePhpRpc_6c38f5bee27f21 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'NotifyAboutDeviceInfo';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebNotifyAboutDeviceInfoRequest_970da00280::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_4a08726c19c7b6 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'RemoveAvatar';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRemoveAvatarRequest_7f4488be9f::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_B__6d4be364ab::class;
}

final class AiobalePhpRpc_643d3a5bc461b3 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'RemoveDefaultCardNumber';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRemoveDefaultCardNumberRequest_6f00b35c04::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_B__6d4be364ab::class;
}

final class AiobalePhpRpc_dca7de6550186e extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.users.v1.Users';
    protected const RPC_METHOD = 'SetUserPrivacyStatus';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebSetUserPrivacyStatusRequest_ef361d1626::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_80f4b109898821 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.v1.Configs';
    protected const RPC_METHOD = 'GetInAppUpdate';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetInAppUpdateRequest_5129f50c3e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetInAppUpdateResponse_58f634e66d::class;
}

final class AiobalePhpRpc_534d6c2c168f09 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.v1.Images';
    protected const RPC_METHOD = 'AddGif';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAddGifRequest_06b55675ee::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_B__6d4be364ab::class;
}

final class AiobalePhpRpc_9147b2ed112425 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.v1.Images';
    protected const RPC_METHOD = 'AddStickerCollection';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAddStickerCollectionRequest_ec75eb4773::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_k_16349_0e5e6c3c38::class;
}

final class AiobalePhpRpc_4ffb9ac4623597 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.v1.Images';
    protected const RPC_METHOD = 'AddStickerPack';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebAddStickerPackRequest_101a60df7c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_B__6d4be364ab::class;
}

final class AiobalePhpRpc_9a6a583fd5930c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.v1.Images';
    protected const RPC_METHOD = 'GetSavedGifs';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetSavedGifsRequest_023ab1362e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetSavedGifsResponse_4ad3607696::class;
}

final class AiobalePhpRpc_682843e720751f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.v1.Images';
    protected const RPC_METHOD = 'LoadOwnStickers';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadOwnStickersRequest_66521e4552::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadOwnStickersResponse_5f631e2063::class;
}

final class AiobalePhpRpc_f28c911145a255 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.v1.Images';
    protected const RPC_METHOD = 'LoadStickerCollection';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebLoadStickerCollectionRequest_1396228f05::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebLoadStickerCollectionResponse_c5a053b2f2::class;
}

final class AiobalePhpRpc_1f0df3a656fc5c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.v1.Images';
    protected const RPC_METHOD = 'RemoveGif';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRemoveGifRequest_dd3faab995::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_B__6d4be364ab::class;
}

final class AiobalePhpRpc_81b2ee00f704a6 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.v1.Images';
    protected const RPC_METHOD = 'RemoveStickerCollection';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRemoveStickerCollectionRequest_c12aba1caa::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_k_16349_0e5e6c3c38::class;
}

final class AiobalePhpRpc_b61929eebaed84 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.v1.Images';
    protected const RPC_METHOD = 'RemoveStickerPack';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebRemoveStickerPackRequest_8f1042e1d5::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_B__6d4be364ab::class;
}

final class AiobalePhpRpc_a2f770bd091320 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.v1.Images';
    protected const RPC_METHOD = 'UseGif';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebUseGifRequest_5393397363::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_842aeabeb1a3e1 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.wallet.v1.Wallet';
    protected const RPC_METHOD = 'ActivateWallet';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebActivateWalletRequest_3ba4c0ba99::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_007e2dfd4291dd extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.wallet.v1.Wallet';
    protected const RPC_METHOD = 'CashOutFromWallet';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebCashOutFromWalletRequest_da913c2b63::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_b2b7bcfb6f4d2f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.wallet.v1.Wallet';
    protected const RPC_METHOD = 'GetMoneyRequestPaymentTokenByCard';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetMoneyRequestPaymentTokenByCardRequest_e60779c620::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetMoneyRequestPaymentTokenByCardResponse_4de07fa758::class;
}

final class AiobalePhpRpc_ab2dbafb602447 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.wallet.v1.Wallet';
    protected const RPC_METHOD = 'GetMyWallets';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetMyWalletsRequest_688c1ca5ff::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetMyWalletsResponse_988e8d22e9::class;
}

final class AiobalePhpRpc_d6080c7c1481e3 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.wallet.v1.Wallet';
    protected const RPC_METHOD = 'GetPaymentTokenByCard';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetPaymentTokenByCardRequest_257496960a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetPaymentTokenByCardResponse_2af58913bb::class;
}

final class AiobalePhpRpc_3217d3195913b5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.wallet.v1.Wallet';
    protected const RPC_METHOD = 'GetWalletChargeToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetWalletChargeTokenRequest_db32248409::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetWalletChargeTokenResponse_19834fcb4e::class;
}

final class AiobalePhpRpc_4f91d30b591801 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.wallet.v1.Wallet';
    protected const RPC_METHOD = 'GetWalletContracts';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetWalletContractsRequest_030278c2f2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetWalletContractsResponse_c0179815bb::class;
}

final class AiobalePhpRpc_f63ea159faaf45 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.wallet.v1.Wallet';
    protected const RPC_METHOD = 'GetWalletInvoice';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebGetWalletInvoiceRequest_43daba6f57::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebGetWalletInvoiceResponse_1909681b73::class;
}

final class AiobalePhpRpc_5d0a58cdff7aa0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.wallet.v1.Wallet';
    protected const RPC_METHOD = 'PayByWallet';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebPayByWalletRequest_745cd05db9::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_d24b152b1fd195 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.wallet.v1.Wallet';
    protected const RPC_METHOD = 'PayMoneyRequestByWallet';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebPayMoneyRequestByWalletRequest_9b8ada07f7::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebT_Ou_2802cd3900::class;
}

final class AiobalePhpRpc_482bd419d2a0c6 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.wallet.v1.Wallet';
    protected const RPC_METHOD = 'VerifyCashOut';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebVerifyCashOutRequest_2b605ab0bd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebVerifyCashOutResponse_1910b66c90::class;
}

final class AiobalePhpRpc_0cc5eef4a580c5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.wallet.v1.Wallet';
    protected const RPC_METHOD = 'VerifyPeer';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebVerifyPeerRequest_821841256e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebVerifyPeerResponse_1419427b69::class;
}

final class AiobalePhpRpc_d27f39aa9f3df3 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.wallet.v1.Wallet';
    protected const RPC_METHOD = 'VerifyQRCode';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_request_WebVerifyQRCodeRequest_df3634f223::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_response_WebVerifyQRCodeResponse_6733482919::class;
}

final class AiobalePhpRpc_fdf3529781f878 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.BankAccountPreferences.v1.BankAccountPreferences';
    protected const RPC_METHOD = 'ActivateYaraMessaging';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0092_da83b0d2bf::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0133_e1943140e5::class;
}

final class AiobalePhpRpc_0ec076db0c6513 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.BankAccountPreferences.v1.BankAccountPreferences';
    protected const RPC_METHOD = 'EditPreference';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0090_c69e83931f::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0133_e1943140e5::class;
}

final class AiobalePhpRpc_e9a8c230bff9d5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.BankAccountPreferences.v1.BankAccountPreferences';
    protected const RPC_METHOD = 'GetPreferences';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0091_c2821417b1::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0089_ea934f60dc::class;
}

final class AiobalePhpRpc_357ea153b37c5c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'BuildAudienceQuery';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0029_31d90be3ca::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0032_2992bbe19b::class;
}

final class AiobalePhpRpc_0a833df0679bfe extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'CalculatePrice';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0037_02d9bde52c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0038_99f1cb6cdf::class;
}

final class AiobalePhpRpc_ae124db99fb194 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'CreateAutomatedAudience';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0030_dddfe7ba90::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0031_16f89ed5d3::class;
}

final class AiobalePhpRpc_709d480f0f2ac2 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'EstimateChannelSponsoredIncome';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0026_fbdc7e9065::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0027_f14196a689::class;
}

final class AiobalePhpRpc_505567430eef95 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetAllPaymentHistory';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0047_43fb2bc320::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0058_be42e9bd04::class;
}

final class AiobalePhpRpc_296fd4a0d24437 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetChannelSponsoredIncomeReport';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0028_56d14aaebf::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0025_1fd65433ba::class;
}

final class AiobalePhpRpc_d1b0d1b870e7e6 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetChannelUndepositedIncomes';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0039_1b86758b64::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0051_8ab75254eb::class;
}

final class AiobalePhpRpc_8ef4f0bc15d98f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetInvoiceContent';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0043_4db323a8b6::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0060_fe8d70b431::class;
}

final class AiobalePhpRpc_b2dfa24ed1c8e9 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'GetLegalOrgChannels';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0040_0da8a97dec::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0052_78912e4ee4::class;
}

final class AiobalePhpRpc_00acd3250695f1 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'MergeCustomIncomeRecords';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0053_5e10b78f69::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0041_ea14803b59::class;
}

final class AiobalePhpRpc_ca5d19e9db549e extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'MergeIncreaseCreditRecords';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0059_f09410f252::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0062_5fc1e73903::class;
}

final class AiobalePhpRpc_2cf6bee483212f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'RetryFailedAutoSentInvoice';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0034_8d3fed17d2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0033_01fe15e9f1::class;
}

final class AiobalePhpRpc_63bd5f3f5b75a2 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'SendInvoiceForPaymentHistoryRecord';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0046_f41db7d9f3::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0055_3fe1c0f744::class;
}

final class AiobalePhpRpc_54691750dfa9c5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'SendLegalOrgChannelIncome';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0050_7b7898feba::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0057_048bda194d::class;
}

final class AiobalePhpRpc_9e954eae88ef97 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.advertisement.v1.Advertisement';
    protected const RPC_METHOD = 'SetCapacityMaxViews';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0035_5f98f7886d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0133_e1943140e5::class;
}

final class AiobalePhpRpc_e1f9c3df0fea8c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'CashPaymentCallback';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0217_77a913ffc5::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0209_e71705a0c5::class;
}

final class AiobalePhpRpc_fdbb106930d660 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'GetAdminStationList';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0226_81f227b37b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0223_6aaa845111::class;
}

final class AiobalePhpRpc_1ed5adb266abf1 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'GetArbaeenCurrenciesList';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0242_a8caf8b838::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0227_fbbd411911::class;
}

final class AiobalePhpRpc_f416455911e0c0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'GetArbaeenCurrencyPrice';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0239_595b39bd91::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0206_1589968ed6::class;
}

final class AiobalePhpRpc_f1d40d7aade5d0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'GetArbaeenPaymentToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0208_1cd2824ccd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0233_b9fc358a9b::class;
}

final class AiobalePhpRpc_ef507dac9fcc60 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'GetListOfArbaeenDeliveryStations';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0231_c7a52d10d9::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0241_2055d2636d::class;
}

final class AiobalePhpRpc_afbb78cf02cfb3 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'GetListOfBoxOffice';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0214_89f7135d14::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0219_f5cfeccf23::class;
}

final class AiobalePhpRpc_d9d6b67db46dfd extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'GetListOfBranches';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0210_9708e3c4b4::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0218_006c8cf783::class;
}

final class AiobalePhpRpc_30a334a58aba8d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'GetListOfStates';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0220_ab6448626f::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0213_53a57eb212::class;
}

final class AiobalePhpRpc_14e7df64a0b22e extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'GetRate';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0225_61bcbbaf90::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0211_defb94abc4::class;
}

final class AiobalePhpRpc_e05b90c0e25317 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'GetSuggestedGroups';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0215_9a0f54d08e::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0224_f01e2f43f1::class;
}

final class AiobalePhpRpc_4c61a641251f79 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'GetValidArbaeenBanks';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0228_b85d98c422::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0236_3d1c906bdf::class;
}

final class AiobalePhpRpc_07139812bb2580 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'LoadArbaeenHistory';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0237_a2271ccbcc::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0229_698615e251::class;
}

final class AiobalePhpRpc_d198bcb8908085 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'SendOTP';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0240_e08ee70be1::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0221_c48453eb01::class;
}

final class AiobalePhpRpc_7fc9980b1938c6 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'StartBot';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0222_667a89e398::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0212_b237dc482f::class;
}

final class AiobalePhpRpc_ed23e970875732 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'UserHasAccess';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0207_774d568b89::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0243_2da007ed26::class;
}

final class AiobalePhpRpc_33752a4e539344 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'VerifyOTP';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0234_0a27647c9d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0216_68741e4011::class;
}

final class AiobalePhpRpc_7e7f57cd3fd111 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'VerifyUserArbaeenAuthority';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0238_493b79e441::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0235_5a5756df06::class;
}

final class AiobalePhpRpc_1809817b1fc0fa extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.arbaeen.v1.Arbaeen';
    protected const RPC_METHOD = 'VerifyUserArbaeenExtraInfo';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0232_78e1901884::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0230_77b22db6ef::class;
}

final class AiobalePhpRpc_0196e79ba4964a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bill.v1.Bill';
    protected const RPC_METHOD = 'CreateSavedBill';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0137_f8a97f3fd6::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0135_63f0d837f6::class;
}

final class AiobalePhpRpc_047729ce748ff8 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bill.v1.Bill';
    protected const RPC_METHOD = 'DeleteSavedBills';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0143_87caf8082a::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0133_e1943140e5::class;
}

final class AiobalePhpRpc_3fe292a0aa684c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bill.v1.Bill';
    protected const RPC_METHOD = 'GetBillHistory';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0145_9ee79bda38::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0136_1d42871e3a::class;
}

final class AiobalePhpRpc_ce8781687e9ed8 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bill.v1.Bill';
    protected const RPC_METHOD = 'GetBillMenu';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0142_a9646fd0c9::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0139_a975646099::class;
}

final class AiobalePhpRpc_4ab498f3d7a741 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bill.v1.Bill';
    protected const RPC_METHOD = 'GetSavedBills';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0138_8a124985de::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0141_372f390b39::class;
}

final class AiobalePhpRpc_fc3853ed65a201 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bill.v1.Bill';
    protected const RPC_METHOD = 'InquiryBill';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0148_074a3253ff::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0146_a40d196bb8::class;
}

final class AiobalePhpRpc_f56db924a4d8b9 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bill.v1.Bill';
    protected const RPC_METHOD = 'PayBill';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0150_e785cb4f33::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0134_c3c0b92b4c::class;
}

final class AiobalePhpRpc_db9ef027ce5e10 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.bill.v1.Bill';
    protected const RPC_METHOD = 'RenameSavedBill';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0140_4c545ad437::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0133_e1943140e5::class;
}

final class AiobalePhpRpc_8435d838e6b33e extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.evex.v1.Evex';
    protected const RPC_METHOD = 'GetEvexCurrenciesList';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0195_d81674cf2c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0192_5ef5bb140f::class;
}

final class AiobalePhpRpc_52d38fc29d1616 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.evex.v1.Evex';
    protected const RPC_METHOD = 'GetEvexCurrencyPrice';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0190_dfe2a475dd::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0191_3aa9121afc::class;
}

final class AiobalePhpRpc_cfbabe4f2969fa extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.evex.v1.Evex';
    protected const RPC_METHOD = 'GetEvexPaymentToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0203_dbb38a0dfc::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0204_3b0a6e0431::class;
}

final class AiobalePhpRpc_a82ecb7c36c5bc extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.evex.v1.Evex';
    protected const RPC_METHOD = 'GetListOfEvexDeliveryStations';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0198_8da8c328bf::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0202_5ffaff80fa::class;
}

final class AiobalePhpRpc_c4c5b827769db5 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.evex.v1.Evex';
    protected const RPC_METHOD = 'GetValidBanks';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0200_781f52677f::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0197_aed6b2b544::class;
}

final class AiobalePhpRpc_07711b320bdcda extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.evex.v1.Evex';
    protected const RPC_METHOD = 'LoadEvexHistory';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0196_cc8bb1c149::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0193_5527ef1215::class;
}

final class AiobalePhpRpc_4d0df091d47fcf extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.evex.v1.Evex';
    protected const RPC_METHOD = 'VerifyUserEvexAuthority';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0194_b3bb8adbad::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0201_9fe5b4a51d::class;
}

final class AiobalePhpRpc_5e9b9da8f3ff46 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.evex.v1.Evex';
    protected const RPC_METHOD = 'VerifyUserEvexExtraInfo';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0189_4a9c187df6::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0188_0cbf722bba::class;
}

final class AiobalePhpRpc_22cd5e1a4e95c0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.exchange.v1.Exchange';
    protected const RPC_METHOD = 'GetCurrenciesList';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0177_b8d45c1d79::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0170_8a6aceaab5::class;
}

final class AiobalePhpRpc_ed6d09fb40566e extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.exchange.v1.Exchange';
    protected const RPC_METHOD = 'GetCurrencyPrice';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0187_a52f767771::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0182_6101fdf604::class;
}

final class AiobalePhpRpc_e56e84cc371793 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.exchange.v1.Exchange';
    protected const RPC_METHOD = 'GetExchangeOrderInfo';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0185_84108c5be9::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0173_49058e5724::class;
}

final class AiobalePhpRpc_c3275f4d0c2756 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.exchange.v1.Exchange';
    protected const RPC_METHOD = 'GetExchangePaymentToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0176_dd9cbb16bb::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0183_70509207a4::class;
}

final class AiobalePhpRpc_6df42344919f5a extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.exchange.v1.Exchange';
    protected const RPC_METHOD = 'GetInitialConfig';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0181_90cd035657::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0174_d54d958e12::class;
}

final class AiobalePhpRpc_a80deb0aa70366 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.exchange.v1.Exchange';
    protected const RPC_METHOD = 'GetListOfDeliveryStations';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0169_f515f97022::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0205_799ae10595::class;
}

final class AiobalePhpRpc_f816c92fac4ffe extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.exchange.v1.Exchange';
    protected const RPC_METHOD = 'GetTravelCurrencyOrderInDetail';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0184_2466016bb7::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0186_02d93b6905::class;
}

final class AiobalePhpRpc_4a90ca42971939 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.exchange.v1.Exchange';
    protected const RPC_METHOD = 'GetUserIcmsInfo';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0172_0b12eacc6f::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0199_d0d6e31596::class;
}

final class AiobalePhpRpc_2b90cafb830e21 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.exchange.v1.Exchange';
    protected const RPC_METHOD = 'LoadExchangeHistory';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0171_5420d1c97b::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0178_75a5ff1687::class;
}

final class AiobalePhpRpc_387120dfa3fc6d extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.exchange.v1.Exchange';
    protected const RPC_METHOD = 'VerifyUserExchangeAuthority';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0175_9c687131e8::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0180_2a57333dd3::class;
}

final class AiobalePhpRpc_93d10c47ad0086 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.garson.v1.Garson';
    protected const RPC_METHOD = 'SearchServices';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0085_89a9eda0b3::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0084_483940fa3e::class;
}

final class AiobalePhpRpc_cda662fef0f77e extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'SetSignMessages';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0096_a7bd459ce7::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0133_e1943140e5::class;
}

final class AiobalePhpRpc_87fdbea12d35d9 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.groups.v1.Groups';
    protected const RPC_METHOD = 'SetSlowMode';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0095_7011e11dec::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0094_23b840d05d::class;
}

final class AiobalePhpRpc_79cb4c73c50521 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.kifpool.v1.Kifpool';
    protected const RPC_METHOD = 'FeeInquiry';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0098_49c2d4e39c::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0097_3cfab714be::class;
}

final class AiobalePhpRpc_043f0427fa0e92 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.pishvaz.v1.Pishvaz';
    protected const RPC_METHOD = 'GetMarketingToolsConfig';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0020_83757ca8c2::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0001_190eabbabb::class;
}

final class AiobalePhpRpc_496bb29031756b extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.pishvaz.v1.Pishvaz';
    protected const RPC_METHOD = 'GetOnboardingPageData';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0014_e6c6c9ca85::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0011_6ab65cb712::class;
}

final class AiobalePhpRpc_996b4b7147475c extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.pishvaz.v1.Pishvaz';
    protected const RPC_METHOD = 'SetMarketingToolAction';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0018_66effb26b4::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0004_bdab29b5d8::class;
}

final class AiobalePhpRpc_e6c81683ddc0a4 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sarrafi.v1.Sarrafi';
    protected const RPC_METHOD = 'AuthenticateUser';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0257_ccda586ab1::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0133_e1943140e5::class;
}

final class AiobalePhpRpc_e8dce42a608b80 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sarrafi.v1.Sarrafi';
    protected const RPC_METHOD = 'CreateOrder';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0248_160935f586::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0133_e1943140e5::class;
}

final class AiobalePhpRpc_a02a6cd864c7be extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sarrafi.v1.Sarrafi';
    protected const RPC_METHOD = 'GetChargeToken';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0262_be3d16ac41::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0266_d7173f7a38::class;
}

final class AiobalePhpRpc_bbd7d20ee50474 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sarrafi.v1.Sarrafi';
    protected const RPC_METHOD = 'GetDepth';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0250_a7f977f934::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0244_80086254fd::class;
}

final class AiobalePhpRpc_8d01ade03d0086 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sarrafi.v1.Sarrafi';
    protected const RPC_METHOD = 'GetOrder';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0261_51a84b0ff9::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0263_2e99f8df9a::class;
}

final class AiobalePhpRpc_53cdc56053a316 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sarrafi.v1.Sarrafi';
    protected const RPC_METHOD = 'GetOrders';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0265_bf91548102::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0264_0014604b37::class;
}

final class AiobalePhpRpc_25dc34b5d991ba extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sarrafi.v1.Sarrafi';
    protected const RPC_METHOD = 'GetSession';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0247_30ad6186da::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0246_d5b81d03c6::class;
}

final class AiobalePhpRpc_14e513df4c51f0 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sarrafi.v1.Sarrafi';
    protected const RPC_METHOD = 'GetTickers';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0251_877803f36d::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0254_3bcb593d9e::class;
}

final class AiobalePhpRpc_8bad6accc8006f extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.sarrafi.v1.Sarrafi';
    protected const RPC_METHOD = 'GetWallet';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0259_7f745e0a67::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0258_a988b1d0b4::class;
}

final class AiobalePhpRpc_dc2138c183c895 extends AiobalePhpRpcMethod
{
    protected const RPC_SERVICE = 'bale.story.v1.Story';
    protected const RPC_METHOD = 'GetAllStories';
    protected const REQUEST_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0112_d4ae3096bc::class;
    protected const RESPONSE_TYPE = \Aiobale\Types\AiobalePhp\AiobalePhp_bale_recovered_RecoveredMessage0111_61b1e121de::class;
}

final class AiobalePhpRpcCatalog
{
    /** @return array<string, class-string<\Aiobale\Model\BaleMethod>> */
    public static function all(): array
    {
        return [
            'AcceptCall' => AiobalePhpRpc_1f1f2d8d5f8365::class,
            'AcceptCampaignMarket' => AiobalePhpRpc_8a91db6151c0bf::class,
            'AcceptMarketJoinRequest' => AiobalePhpRpc_76111be40fe5a9::class,
            'ActivateWallet' => AiobalePhpRpc_842aeabeb1a3e1::class,
            'ActivateYaraMessaging' => AiobalePhpRpc_fdf3529781f878::class,
            'AddBotStory' => AiobalePhpRpc_279b0c84ed0f9c::class,
            'AddCard' => AiobalePhpRpc_b032d910e64849::class,
            'AddChannelStory' => AiobalePhpRpc_77c8bdbaa9fdeb::class,
            'AddCustomIncome' => AiobalePhpRpc_bb63824f1feeae::class,
            'AddDestinationCards' => AiobalePhpRpc_1db70a6bfdafe2::class,
            'AddDetailToTransaction' => AiobalePhpRpc_dfe1ac4fc3a875::class,
            'AddDiscussionGroupAdmin' => AiobalePhpRpc_af4b7ba35f4eaf::class,
            'AddGif' => AiobalePhpRpc_534d6c2c168f09::class,
            'AddNewCards' => AiobalePhpRpc_26a560b0f54043::class,
            'AddStickerCollection' => AiobalePhpRpc_9147b2ed112425::class,
            'AddStickerPack' => AiobalePhpRpc_4ffb9ac4623597::class,
            'AddStory' => AiobalePhpRpc_ac82dd260a688e::class,
            'AddTransactionTags' => AiobalePhpRpc_0b86dd90cfb09f::class,
            'AddUserTags' => AiobalePhpRpc_dc62bde521a955::class,
            'AnswerCallJoinRequest' => AiobalePhpRpc_78f3fc9d2d243c::class,
            'ArchiveDialogs' => AiobalePhpRpc_421378b1bdd472::class,
            'AskBotReviewCallback' => AiobalePhpRpc_53a2fe60242faa::class,
            'AskToJoinCall' => AiobalePhpRpc_6e6ecaf0e643a3::class,
            'AuthenticateUser' => AiobalePhpRpc_e6c81683ddc0a4::class,
            'BuildAudienceQuery' => AiobalePhpRpc_357ea153b37c5c::class,
            'BuyCharge' => AiobalePhpRpc_5baad589263564::class,
            'BuyFastCharge' => AiobalePhpRpc_67a7fb422ac986::class,
            'BuyInternetBundle' => AiobalePhpRpc_3c2c4d8ed9ffad::class,
            'CalculateDiscountedPrice' => AiobalePhpRpc_23bdc4f9eb2a00::class,
            'CalculatePrice' => AiobalePhpRpc_0a833df0679bfe::class,
            'CanAddBotStory' => AiobalePhpRpc_324826bef3e331::class,
            'CancelMessageStream' => AiobalePhpRpc_90178cc7259329::class,
            'CashOut' => AiobalePhpRpc_4104c931c84895::class,
            'CashOutFromWallet' => AiobalePhpRpc_007e2dfd4291dd::class,
            'CashPaymentCallback' => AiobalePhpRpc_e1f9c3df0fea8c::class,
            'ChangeAccountState' => AiobalePhpRpc_30875079dc2b60::class,
            'ChangeAdState' => AiobalePhpRpc_3adaf5d75fc50b::class,
            'ChangeBonusCodeState' => AiobalePhpRpc_2a8bf049638774::class,
            'ChangeCampaignContentState' => AiobalePhpRpc_27a91fd14d7d1b::class,
            'ChangeCampaignState' => AiobalePhpRpc_8d44338ecea2bf::class,
            'ChangeChannelIncomeOwner' => AiobalePhpRpc_a02136c58a4676::class,
            'ChangeChannelShowAdPermissions' => AiobalePhpRpc_4843be1d02ef27::class,
            'ChangeDefaultCardNumber' => AiobalePhpRpc_f87f721078394d::class,
            'ChangeLanguage' => AiobalePhpRpc_f2185ca0f75854::class,
            'ChangePhone' => AiobalePhpRpc_7e9b3c84796fca::class,
            'ChangePhoneNumber' => AiobalePhpRpc_d8c791606b9736::class,
            'ChangeStatusDialogAdOrder' => AiobalePhpRpc_c5038a9a03aca4::class,
            'ChangeUserDataState' => AiobalePhpRpc_b418c18803458d::class,
            'ChannelIncomeGetCredit' => AiobalePhpRpc_22290e436c7fc0::class,
            'ChannelIncomeKifTransfer' => AiobalePhpRpc_2be6cd72c7a1d9::class,
            'ChannelIncomePayment' => AiobalePhpRpc_ac930c994f2dae::class,
            'Charge' => AiobalePhpRpc_9675770ffb3afb::class,
            'CheckChargePermission' => AiobalePhpRpc_dbe57447849293::class,
            'CheckLinkValidity' => AiobalePhpRpc_bf9aea28f1b195::class,
            'CheckPassword' => AiobalePhpRpc_d055d29b00e461::class,
            'CheckPasswordSet' => AiobalePhpRpc_493eeeec159cee::class,
            'ClosePoll' => AiobalePhpRpc_a919dcd80249bd::class,
            'ConfirmPhoneNumber' => AiobalePhpRpc_34e7746902e310::class,
            'ConvertIncome' => AiobalePhpRpc_e21b78ab7da1c1::class,
            'CreateAd' => AiobalePhpRpc_65ee0a1d62e8b1::class,
            'CreateAndStartChannelAd' => AiobalePhpRpc_f8ac2cfd1b132a::class,
            'CreateAutomatedAudience' => AiobalePhpRpc_ae124db99fb194::class,
            'CreateBaleDialogCustomAd' => AiobalePhpRpc_1b613e7ac975ea::class,
            'CreateBonusCode' => AiobalePhpRpc_5f97647e89883a::class,
            'CreateChannelIncomeFactor' => AiobalePhpRpc_26488822b4ab94::class,
            'CreateCustomCampaignPackage' => AiobalePhpRpc_88a89d1b5b8cb2::class,
            'CreateFolder' => AiobalePhpRpc_9e1914537e659f::class,
            'CreateKifpool' => AiobalePhpRpc_0067cc188fd666::class,
            'CreateMarketJoinRequest' => AiobalePhpRpc_62539908a35fa8::class,
            'CreateOrder' => AiobalePhpRpc_e8dce42a608b80::class,
            'CreatePoll' => AiobalePhpRpc_ef2210807c5b71::class,
            'CreateReservedFolder' => AiobalePhpRpc_b69641b943fc51::class,
            'CreateSavedBill' => AiobalePhpRpc_0196e79ba4964a::class,
            'CreateTag' => AiobalePhpRpc_a254047e65d12c::class,
            'CreateThread' => AiobalePhpRpc_6f1a0d7778d5ef::class,
            'CreateTopic' => AiobalePhpRpc_d0dbf9bfb76b18::class,
            'CryptoCashOut' => AiobalePhpRpc_9d8ffe4d6cce67::class,
            'CryptoInvoice' => AiobalePhpRpc_5d0912c718b4d5::class,
            'CryptoPurchase' => AiobalePhpRpc_83f3b2ea5e6639::class,
            'CryptoRefund' => AiobalePhpRpc_e5ed03bbe44125::class,
            'CryptoTransfer' => AiobalePhpRpc_752008e1813a65::class,
            'DeleteAccount' => AiobalePhpRpc_2c82cc0ed6731f::class,
            'DeleteCallLogs' => AiobalePhpRpc_4c9c440f8acc37::class,
            'DeleteCustomIncome' => AiobalePhpRpc_c2affb5af398b1::class,
            'DeleteFolder' => AiobalePhpRpc_478b738da1f775::class,
            'DeletePassword' => AiobalePhpRpc_1b36fe20978c7b::class,
            'DeleteRecentChargeOrder' => AiobalePhpRpc_40efce647be34b::class,
            'DeleteRecentInternetBundleOrder' => AiobalePhpRpc_3a0c888ef6515e::class,
            'DeleteSavedBills' => AiobalePhpRpc_047729ce748ff8::class,
            'DeleteStream' => AiobalePhpRpc_18feb14f42c81b::class,
            'DeleteTopic' => AiobalePhpRpc_4d564b02b5de82::class,
            'DeliverOtp' => AiobalePhpRpc_ecc7b4b890ec5b::class,
            'DisableTwoFactorAuthentication' => AiobalePhpRpc_2c60a7b0f5085a::class,
            'DiscardCall' => AiobalePhpRpc_dfdd9bdbfc1baa::class,
            'EditAccount' => AiobalePhpRpc_b300238ea91812::class,
            'EditAd' => AiobalePhpRpc_d4a46a89f32d75::class,
            'EditAvatar' => AiobalePhpRpc_1f2777136d1976::class,
            'EditBirthDate' => AiobalePhpRpc_6a38bd8ed92e65::class,
            'EditCampaignAd' => AiobalePhpRpc_2b1c410f70c51a::class,
            'EditCampaignContent' => AiobalePhpRpc_257122655a5b6a::class,
            'EditCardExpirationDate' => AiobalePhpRpc_33abd56b3f01dc::class,
            'EditCustomServices' => AiobalePhpRpc_5b4d02c1d423ff::class,
            'EditFolder' => AiobalePhpRpc_4d13fb43c664d2::class,
            'EditGroupAvatar' => AiobalePhpRpc_2e3a965ddda2b0::class,
            'EditGroupDefaultCardNumber' => AiobalePhpRpc_c6994e01c94815::class,
            'EditMyPreferredLanguages' => AiobalePhpRpc_db036ee030e28b::class,
            'EditMyTimeZone' => AiobalePhpRpc_b5511bd6b364fc::class,
            'EditPreference' => AiobalePhpRpc_0ec076db0c6513::class,
            'EditSex' => AiobalePhpRpc_c6ce74f3822896::class,
            'EditTopic' => AiobalePhpRpc_49b615a948b207::class,
            'EnableShowReactionFlag' => AiobalePhpRpc_e7dc81c4c28612::class,
            'EnableTwoFactorAuthentication' => AiobalePhpRpc_75a604d8127ed3::class,
            'EnrollNewCard' => AiobalePhpRpc_45abd0d61f0336::class,
            'EstimateChannelSponsoredIncome' => AiobalePhpRpc_709d480f0f2ac2::class,
            'ExecuteTaskNow' => AiobalePhpRpc_e5d2be603ff61f::class,
            'FeeInquiry' => AiobalePhpRpc_79cb4c73c50521::class,
            'FetchGroupAdmins' => AiobalePhpRpc_49211abff13e37::class,
            'FetchProtectedMessage' => AiobalePhpRpc_6f6bff1fbea5ba::class,
            'FileUploadCancel' => AiobalePhpRpc_0ae9546c274155::class,
            'FilterTaggedTransactions' => AiobalePhpRpc_966705f1d35de0::class,
            'FinishAd' => AiobalePhpRpc_588055daeae089::class,
            'FinishAdV2' => AiobalePhpRpc_c6a89fd251528b::class,
            'FinishChannelAd' => AiobalePhpRpc_a13b56aeadbc0e::class,
            'ForgetPassword' => AiobalePhpRpc_f801596988a12e::class,
            'GenerateCallLink' => AiobalePhpRpc_7c245471205585::class,
            'GetAccountData' => AiobalePhpRpc_5726d1ae22d69a::class,
            'GetAccounts' => AiobalePhpRpc_3ea33db107b3cb::class,
            'GetAccountsByState' => AiobalePhpRpc_2267fef57fc2f2::class,
            'GetActiveAds' => AiobalePhpRpc_80b3ca4755baa7::class,
            'GetActiveChannelAds' => AiobalePhpRpc_20d53577387fab::class,
            'GetActiveSharedMedia' => AiobalePhpRpc_8ae11b5c3c1efa::class,
            'GetAdData' => AiobalePhpRpc_be083ea32e5617::class,
            'GetAdDetail' => AiobalePhpRpc_e816847d7565b7::class,
            'GetAdProvider' => AiobalePhpRpc_a36ec0312a4dd5::class,
            'GetAdReport' => AiobalePhpRpc_8061764787edd7::class,
            'GetAdReportV2' => AiobalePhpRpc_ba5d248afb56e5::class,
            'GetAdminStationList' => AiobalePhpRpc_fdbb106930d660::class,
            'GetAdsBySpotAndPlatform' => AiobalePhpRpc_9dec0a5d074495::class,
            'GetAdsByStateAndSpot' => AiobalePhpRpc_140a4922e4e8ed::class,
            'GetAdvertisementBot' => AiobalePhpRpc_656260fe910277::class,
            'GetAllChannelIncomesFactor' => AiobalePhpRpc_d0c0e8f234645c::class,
            'GetAllPaymentHistory' => AiobalePhpRpc_505567430eef95::class,
            'GetAllStories' => AiobalePhpRpc_dc2138c183c895::class,
            'GetArbaeenCurrenciesList' => AiobalePhpRpc_1ed5adb266abf1::class,
            'GetArbaeenCurrencyPrice' => AiobalePhpRpc_f416455911e0c0::class,
            'GetArbaeenPaymentToken' => AiobalePhpRpc_f1d40d7aade5d0::class,
            'GetAuthSessions' => AiobalePhpRpc_f8bde2ec9b4cc1::class,
            'GetAuthToken' => AiobalePhpRpc_9d13c30ed0b2af::class,
            'GetAvailableCampaignStartDate' => AiobalePhpRpc_742116de4a0c70::class,
            'GetAvailableCharges' => AiobalePhpRpc_84542b882de95c::class,
            'GetAwaitingToShowAds' => AiobalePhpRpc_895877b8c6530a::class,
            'GetAwaitingToShowChannelAds' => AiobalePhpRpc_4182213fed53be::class,
            'GetBadges' => AiobalePhpRpc_f5d2d9c587865b::class,
            'GetBajeBamTicket' => AiobalePhpRpc_73db992a76ce37::class,
            'GetBalance' => AiobalePhpRpc_ac55a8ae28f251::class,
            'GetBaleCustomAd' => AiobalePhpRpc_4eac86662b3477::class,
            'GetBaleTicket' => AiobalePhpRpc_e487012bc3d9aa::class,
            'GetBamServiceToken' => AiobalePhpRpc_8616512b193469::class,
            'GetBillHistory' => AiobalePhpRpc_3fe292a0aa684c::class,
            'GetBillMenu' => AiobalePhpRpc_ce8781687e9ed8::class,
            'GetBonusCodeData' => AiobalePhpRpc_e9dcc567b5cf24::class,
            'GetBonusCodes' => AiobalePhpRpc_72854d4c96527a::class,
            'GetBotBanners' => AiobalePhpRpc_890e65b49ccd29::class,
            'GetBotGroupPermissions' => AiobalePhpRpc_3748c93eac363c::class,
            'GetBotInfo' => AiobalePhpRpc_1b742394c8923f::class,
            'GetBotPage' => AiobalePhpRpc_d2eaca973dfd35::class,
            'GetBotStories' => AiobalePhpRpc_5f830e56c3dbbe::class,
            'GetBotWhiteList' => AiobalePhpRpc_84d80177cda8b3::class,
            'GetBots' => AiobalePhpRpc_be8dc9c8e970d3::class,
            'GetBotsByCategory' => AiobalePhpRpc_b4722cd9eeb4bf::class,
            'GetBusinessAds' => AiobalePhpRpc_65ad6a8a9e3a15::class,
            'GetCRMIssues' => AiobalePhpRpc_2227bb4bf570c4::class,
            'GetCallLinkDetails' => AiobalePhpRpc_a64c43ee75f4a3::class,
            'GetCallLogs' => AiobalePhpRpc_66a3ec501363b5::class,
            'GetCallState' => AiobalePhpRpc_2a9f9cd2ae30f9::class,
            'GetCampaignAds' => AiobalePhpRpc_a10fb863abbd97::class,
            'GetCampaignContentById' => AiobalePhpRpc_bbe2a6be0d0dfe::class,
            'GetCampaignContents' => AiobalePhpRpc_cb6e18bdd86dbc::class,
            'GetCampaignData' => AiobalePhpRpc_dcf287c4885e74::class,
            'GetCanSeeMessages' => AiobalePhpRpc_169b8823477a10::class,
            'GetCardInfo' => AiobalePhpRpc_23cc1290d0def4::class,
            'GetCardRemain' => AiobalePhpRpc_2bb6f16bf79c05::class,
            'GetCardTransferToken' => AiobalePhpRpc_d4f8bfb1c943a8::class,
            'GetCards' => AiobalePhpRpc_2e84a48e5a60ba::class,
            'GetCategoriesList' => AiobalePhpRpc_72a50536090314::class,
            'GetCategorizedBots' => AiobalePhpRpc_260f3be8f01392::class,
            'GetCategoryMarkets' => AiobalePhpRpc_6db276e180cba5::class,
            'GetCategoryProducts' => AiobalePhpRpc_b6fe047cd6f585::class,
            'GetChannelAds' => AiobalePhpRpc_f60a2ff7fa08dd::class,
            'GetChannelEarnMoneyInfo' => AiobalePhpRpc_a536eef8f195bc::class,
            'GetChannelEarnMoneyStatus' => AiobalePhpRpc_982704c027e59f::class,
            'GetChannelGraphReport' => AiobalePhpRpc_6c5d4eb9cdd149::class,
            'GetChannelIncomeReport' => AiobalePhpRpc_3a689c63bd7a1d::class,
            'GetChannelOwnerBankInformation' => AiobalePhpRpc_0e7fd76f3a1597::class,
            'GetChannelRecommendations' => AiobalePhpRpc_06472d6206300d::class,
            'GetChannelShowAdCategoryFilter' => AiobalePhpRpc_4cf081be3ca73d::class,
            'GetChannelShowAdPermissions' => AiobalePhpRpc_26bc0f0dde79cd::class,
            'GetChannelShowAdTimeRestrict' => AiobalePhpRpc_6f6d6048e360fd::class,
            'GetChannelSponsoredIncomeReport' => AiobalePhpRpc_296fd4a0d24437::class,
            'GetChannelStories' => AiobalePhpRpc_f21a5c1f35e63c::class,
            'GetChannelUndepositedIncomes' => AiobalePhpRpc_d1b0d1b870e7e6::class,
            'GetChannelsViewReport' => AiobalePhpRpc_c7327e8427ab86::class,
            'GetChargePaymentToken' => AiobalePhpRpc_093015fe619034::class,
            'GetChargeToken' => AiobalePhpRpc_a02a6cd864c7be::class,
            'GetConfig' => AiobalePhpRpc_145bee9f1235e7::class,
            'GetContactsPresences' => AiobalePhpRpc_9ff4ecf26946be::class,
            'GetCredit' => AiobalePhpRpc_20c2fc311b1c48::class,
            'GetCreditHistory' => AiobalePhpRpc_b5acaa3d84a335::class,
            'GetCreditableAccounts' => AiobalePhpRpc_e2d5ed79c03db7::class,
            'GetCryptoChargePaymentToken' => AiobalePhpRpc_40a5dd4b0262c9::class,
            'GetCryptoWallets' => AiobalePhpRpc_bd9cd1871caa3f::class,
            'GetCurrenciesList' => AiobalePhpRpc_22cd5e1a4e95c0::class,
            'GetCurrencyPrice' => AiobalePhpRpc_ed6d09fb40566e::class,
            'GetCustomIncomes' => AiobalePhpRpc_b91dfff6fbb1a6::class,
            'GetCustomServices' => AiobalePhpRpc_52114a7eb5916f::class,
            'GetDefaultCard' => AiobalePhpRpc_58173bb91ecf75::class,
            'GetDefaultStoryBackgrounds' => AiobalePhpRpc_70226567300bba::class,
            'GetDepth' => AiobalePhpRpc_bbd7d20ee50474::class,
            'GetDestinationCardInfo' => AiobalePhpRpc_138b092f3aef67::class,
            'GetDestinationCards' => AiobalePhpRpc_1913014880f632::class,
            'GetDialogAdOrderDetails' => AiobalePhpRpc_46771d654eaae4::class,
            'GetDialogAdOrderPaymentToken' => AiobalePhpRpc_c3864e883652e1::class,
            'GetDiff' => AiobalePhpRpc_c3e974c3626587::class,
            'GetDifference' => AiobalePhpRpc_7dc502aa113772::class,
            'GetDiscussionMessage' => AiobalePhpRpc_8911be2a189e30::class,
            'GetEvexCurrenciesList' => AiobalePhpRpc_8435d838e6b33e::class,
            'GetEvexCurrencyPrice' => AiobalePhpRpc_52d38fc29d1616::class,
            'GetEvexPaymentToken' => AiobalePhpRpc_cfbabe4f2969fa::class,
            'GetExchangeOrderInfo' => AiobalePhpRpc_e56e84cc371793::class,
            'GetExchangePaymentToken' => AiobalePhpRpc_c3275f4d0c2756::class,
            'GetFactorEligibleAds' => AiobalePhpRpc_6bd58fcb5e6a79::class,
            'GetFullPollResult' => AiobalePhpRpc_630f0ac67af286::class,
            'GetFullUser' => AiobalePhpRpc_1e787d81915d42::class,
            'GetGiftPacketPaymentToken' => AiobalePhpRpc_93a79df1e6c713::class,
            'GetGroupCall' => AiobalePhpRpc_68d32e5a687f81::class,
            'GetGroupDefaultCardNumber' => AiobalePhpRpc_2ab00c0bb25bd4::class,
            'GetGroupMembersCount' => AiobalePhpRpc_14fbea788f1978::class,
            'GetGroupMembersPresences' => AiobalePhpRpc_12989aeea50214::class,
            'GetGroupOnlineCount' => AiobalePhpRpc_b0c1d8dea17622::class,
            'GetGroupRecommendations' => AiobalePhpRpc_c654c203e43cc1::class,
            'GetGroupsRecommendation' => AiobalePhpRpc_8bc88b37f16029::class,
            'GetHomePage' => AiobalePhpRpc_2a617ad564cdae::class,
            'GetInAppUpdate' => AiobalePhpRpc_80f4b109898821::class,
            'GetIndexedProducts' => AiobalePhpRpc_b9816b9fbf9a14::class,
            'GetInitialConfig' => AiobalePhpRpc_6df42344919f5a::class,
            'GetInlineBotResults' => AiobalePhpRpc_3bf6eb4b019706::class,
            'GetInternetBundleList' => AiobalePhpRpc_dc7bbb041157a2::class,
            'GetInternetBundlePaymentToken' => AiobalePhpRpc_00b8cb88c687a5::class,
            'GetInvoiceContent' => AiobalePhpRpc_8ef4f0bc15d98f::class,
            'GetJWTToken' => AiobalePhpRpc_3c1cb96a3a6fd5::class,
            'GetKifpoolOwner' => AiobalePhpRpc_1d46cd175f877d::class,
            'GetKifpoolPointBalance' => AiobalePhpRpc_b4f8a5a5d5827c::class,
            'GetKifpoolPointDetails' => AiobalePhpRpc_b8f5345c6f4cf5::class,
            'GetKifpoolPointSummery' => AiobalePhpRpc_9aa5dca564b14a::class,
            'GetKifpoolTransactionPoint' => AiobalePhpRpc_a44f18305b2153::class,
            'GetLegalOrgChannels' => AiobalePhpRpc_b2dfa24ed1c8e9::class,
            'GetLinkPreview' => AiobalePhpRpc_2aec3099f9f41a::class,
            'GetLinkStatus' => AiobalePhpRpc_6049f8371ad481::class,
            'GetLinkSummary' => AiobalePhpRpc_ebafacdc0b9f99::class,
            'GetListOfArbaeenDeliveryStations' => AiobalePhpRpc_ef507dac9fcc60::class,
            'GetListOfBoxOffice' => AiobalePhpRpc_afbb78cf02cfb3::class,
            'GetListOfBranches' => AiobalePhpRpc_d9d6b67db46dfd::class,
            'GetListOfDeliveryStations' => AiobalePhpRpc_a80deb0aa70366::class,
            'GetListOfEvexDeliveryStations' => AiobalePhpRpc_a82ecb7c36c5bc::class,
            'GetListOfStates' => AiobalePhpRpc_30a334a58aba8d::class,
            'GetMarket' => AiobalePhpRpc_fe64db4a6bd5b5::class,
            'GetMarketJoinRequests' => AiobalePhpRpc_8d3abd84208cbc::class,
            'GetMarketingToolsConfig' => AiobalePhpRpc_043f0427fa0e92::class,
            'GetMarketsPendingJoinRequest' => AiobalePhpRpc_8fa0ca0d5b11ff::class,
            'GetMenuButton' => AiobalePhpRpc_793ce760b71a98::class,
            'GetMessageSeenList' => AiobalePhpRpc_0324e31544be16::class,
            'GetMessagesRepliesInfo' => AiobalePhpRpc_2fa624703c6ac3::class,
            'GetMiniAppUrl' => AiobalePhpRpc_1560519f29abaa::class,
            'GetMoneyRequestDetails' => AiobalePhpRpc_154dd193a4b7aa::class,
            'GetMoneyRequestPaymentList' => AiobalePhpRpc_be2b0a608a5641::class,
            'GetMoneyRequestPaymentTokenByCard' => AiobalePhpRpc_b2b7bcfb6f4d2f::class,
            'GetMostPopularStories' => AiobalePhpRpc_a20d973c288c8a::class,
            'GetMutualGroups' => AiobalePhpRpc_1acf7296441d66::class,
            'GetMyBank' => AiobalePhpRpc_8f291d2047a57b::class,
            'GetMyContactPopularChannels' => AiobalePhpRpc_4e2348cec492f3::class,
            'GetMyGroups' => AiobalePhpRpc_e5adae6c50093d::class,
            'GetMyUpvotes' => AiobalePhpRpc_0c3c72095ba431::class,
            'GetMyWallets' => AiobalePhpRpc_ab2dbafb602447::class,
            'GetNasimFilePublicUrl' => AiobalePhpRpc_ddc34e22666bad::class,
            'GetNasimFileUploadResume' => AiobalePhpRpc_2450ab7c43191e::class,
            'GetNasimFileUrls' => AiobalePhpRpc_8cd42c7fe77d91::class,
            'GetNumberOfSales' => AiobalePhpRpc_f3dd42b7ea1113::class,
            'GetOTPToken' => AiobalePhpRpc_4407b986b9ecf2::class,
            'GetOTPTokenV2' => AiobalePhpRpc_877ab9811d93ab::class,
            'GetOnBoardingChannels' => AiobalePhpRpc_eb0091babe1fdd::class,
            'GetOnboardingPageData' => AiobalePhpRpc_496bb29031756b::class,
            'GetOnboardingPeers' => AiobalePhpRpc_2e48933f390fa0::class,
            'GetOnboardingPosts' => AiobalePhpRpc_2e7da768535af3::class,
            'GetOnboardingSpotData' => AiobalePhpRpc_7b318213a81b86::class,
            'GetOnboardingStatus' => AiobalePhpRpc_75d184be451827::class,
            'GetOngoingCalls' => AiobalePhpRpc_81e8abc11d2e11::class,
            'GetOrder' => AiobalePhpRpc_8d01ade03d0086::class,
            'GetOrders' => AiobalePhpRpc_53cdc56053a316::class,
            'GetOrganizationPaymentToken' => AiobalePhpRpc_5aac614c814a40::class,
            'GetOwnerIdByPhone' => AiobalePhpRpc_9321f9cb9f7c7f::class,
            'GetPSProxyPaymentToken' => AiobalePhpRpc_38952f4b0e5934::class,
            'GetPSProxyToken' => AiobalePhpRpc_23ba95a8f67ac0::class,
            'GetPackages' => AiobalePhpRpc_762c30cbbc0e7e::class,
            'GetPaidAdsByTime' => AiobalePhpRpc_b53489ff10e979::class,
            'GetParticipants' => AiobalePhpRpc_f0107556ed46dc::class,
            'GetPayMoneyRequestToken' => AiobalePhpRpc_7aad266409c709::class,
            'GetPaymentData' => AiobalePhpRpc_40bf6e660b2427::class,
            'GetPaymentDetails' => AiobalePhpRpc_93c860ee3f9a73::class,
            'GetPaymentToken' => AiobalePhpRpc_400426a9d05e81::class,
            'GetPaymentTokenByCard' => AiobalePhpRpc_d6080c7c1481e3::class,
            'GetPayvandCard' => AiobalePhpRpc_4c1cf9f00ea8ee::class,
            'GetPayvandCardList' => AiobalePhpRpc_c7ce3b4e27bfc8::class,
            'GetPendingCampaignMarkets' => AiobalePhpRpc_5f6b54f2a9f959::class,
            'GetPeriodCapacityData' => AiobalePhpRpc_982dce0514b93e::class,
            'GetPollResults' => AiobalePhpRpc_ccd47f1a839839::class,
            'GetPreferences' => AiobalePhpRpc_e9a8c230bff9d5::class,
            'GetRate' => AiobalePhpRpc_14e7df64a0b22e::class,
            'GetRecentChargeOrders' => AiobalePhpRpc_03360f013039ba::class,
            'GetRecentCharges' => AiobalePhpRpc_2501a242adf8f7::class,
            'GetRecentInternetBundleOrders' => AiobalePhpRpc_a11061fa0a88ea::class,
            'GetRecommendedBots' => AiobalePhpRpc_890156cbdb76d2::class,
            'GetRelatedChannels' => AiobalePhpRpc_5dd692ecc7e359::class,
            'GetRelatedGroups' => AiobalePhpRpc_0b2b9da845ac34::class,
            'GetRemainToken' => AiobalePhpRpc_9c8df14adf47ee::class,
            'GetRoutesStates' => AiobalePhpRpc_e3825c000a3422::class,
            'GetSadadPSPPaymentToken' => AiobalePhpRpc_c2357448daa82b::class,
            'GetSavedBills' => AiobalePhpRpc_4ab498f3d7a741::class,
            'GetSavedGifs' => AiobalePhpRpc_9a6a583fd5930c::class,
            'GetSectionPage' => AiobalePhpRpc_9b056d2d04b583::class,
            'GetServices' => AiobalePhpRpc_fb01119c40dd4f::class,
            'GetSession' => AiobalePhpRpc_25dc34b5d991ba::class,
            'GetShowReactionFlag' => AiobalePhpRpc_0dd39195c024d0::class,
            'GetSimilarPosts' => AiobalePhpRpc_4c190e007b95eb::class,
            'GetStores' => AiobalePhpRpc_fbb0f88bf0c84b::class,
            'GetStories' => AiobalePhpRpc_7e4904db879ef8::class,
            'GetStoriesByList' => AiobalePhpRpc_ad630b8ae0a085::class,
            'GetStoryById' => AiobalePhpRpc_cce73c88a20fd2::class,
            'GetStoryReactionEmojis' => AiobalePhpRpc_b8c7caaac33064::class,
            'GetStoryTags' => AiobalePhpRpc_220c2991089cd0::class,
            'GetStoryWidgets' => AiobalePhpRpc_8f331e57ed9ea8::class,
            'GetSubTransactions' => AiobalePhpRpc_f3c7c94461556b::class,
            'GetSuggestedGroups' => AiobalePhpRpc_e05b90c0e25317::class,
            'GetTags' => AiobalePhpRpc_0922d1eed96920::class,
            'GetTickers' => AiobalePhpRpc_14e513df4c51f0::class,
            'GetTicket' => AiobalePhpRpc_28e29431a63fd2::class,
            'GetTokenInvoice' => AiobalePhpRpc_c81f4565bf8b81::class,
            'GetTopMarkets' => AiobalePhpRpc_bf6d35e21fa589::class,
            'GetTopPeer' => AiobalePhpRpc_ca712dbe60f802::class,
            'GetTopUpChargePaymentToken' => AiobalePhpRpc_d6874b2002c508::class,
            'GetTopicByID' => AiobalePhpRpc_d405f7a2d02287::class,
            'GetTopics' => AiobalePhpRpc_4b0a8ffd0f5a00::class,
            'GetTotalPaidAmount' => AiobalePhpRpc_52e944c2612f3e::class,
            'GetTransactionTags' => AiobalePhpRpc_6b1c445ae2d55b::class,
            'GetTranscript' => AiobalePhpRpc_e728c33e9e7494::class,
            'GetTravelCurrencyOrderInDetail' => AiobalePhpRpc_f816c92fac4ffe::class,
            'GetTrendBots' => AiobalePhpRpc_2985812a9bd1da::class,
            'GetUploadLimits' => AiobalePhpRpc_56f27f554a6826::class,
            'GetUserAccounts' => AiobalePhpRpc_c9cbe21302f1c7::class,
            'GetUserAds' => AiobalePhpRpc_926ccee91e8488::class,
            'GetUserAnonymousContactPage' => AiobalePhpRpc_76af3d69091fb8::class,
            'GetUserAuthData' => AiobalePhpRpc_dafd0e6a8368d0::class,
            'GetUserCampaigns' => AiobalePhpRpc_e0e4cd48aa2f32::class,
            'GetUserContext' => AiobalePhpRpc_13a9376a1adc0a::class,
            'GetUserFullPrivacy' => AiobalePhpRpc_2fbb59ed6c35ca::class,
            'GetUserIcmsInfo' => AiobalePhpRpc_4a90ca42971939::class,
            'GetUserIdToken' => AiobalePhpRpc_13da796e1ef863::class,
            'GetUserOnboardingScenario' => AiobalePhpRpc_bc16cab05fec34::class,
            'GetUserOrganizationInfo' => AiobalePhpRpc_24161cb4dacdfa::class,
            'GetUserOrganizationalContacts' => AiobalePhpRpc_8053779b955c49::class,
            'GetUserPrivacyConfig' => AiobalePhpRpc_4a0b123c4666cd::class,
            'GetUserPrivacyStatus' => AiobalePhpRpc_cec0690f2f8fb3::class,
            'GetUserRepeatedBots' => AiobalePhpRpc_4583076843f30e::class,
            'GetUserStatus' => AiobalePhpRpc_21d8d9734211dc::class,
            'GetUserStoryConfig' => AiobalePhpRpc_f2973aa21a8a6c::class,
            'GetUserTags' => AiobalePhpRpc_1d401928b62714::class,
            'GetUsersAuthDataByState' => AiobalePhpRpc_14f823942c624b::class,
            'GetUsersDefaultCardNumber' => AiobalePhpRpc_3e5c24b3133558::class,
            'GetUsersPresence' => AiobalePhpRpc_c0c535ecc1bd38::class,
            'GetVODContents' => AiobalePhpRpc_ba68dc67a9bcd4::class,
            'GetValidArbaeenBanks' => AiobalePhpRpc_4c61a641251f79::class,
            'GetValidBanks' => AiobalePhpRpc_c4c5b827769db5::class,
            'GetViewers' => AiobalePhpRpc_5c9dc41d3b1bc7::class,
            'GetViewersCount' => AiobalePhpRpc_c278e90fed23a5::class,
            'GetVoucherChargePaymentToken' => AiobalePhpRpc_c519d53ec0e116::class,
            'GetWallet' => AiobalePhpRpc_8bad6accc8006f::class,
            'GetWalletChargeToken' => AiobalePhpRpc_3217d3195913b5::class,
            'GetWalletContracts' => AiobalePhpRpc_4f91d30b591801::class,
            'GetWalletInvoice' => AiobalePhpRpc_f63ea159faaf45::class,
            'GetWebappHash' => AiobalePhpRpc_b1bc5cfa183084::class,
            'GetWinnerIDs' => AiobalePhpRpc_c775a413ed114d::class,
            'GetWssURL' => AiobalePhpRpc_60fe23f2f7b024::class,
            'GetYaldaStores' => AiobalePhpRpc_f6c1fdc5b09a0a::class,
            'GrantBankiAccess' => AiobalePhpRpc_0862977e39f461::class,
            'InquiryBill' => AiobalePhpRpc_fc3853ed65a201::class,
            'InviteToCall' => AiobalePhpRpc_f056e893eb41b6::class,
            'InviteUser' => AiobalePhpRpc_a60da0a809815d::class,
            'Invoice' => AiobalePhpRpc_5c9d0c817dcb5f::class,
            'InvokeCustomAction' => AiobalePhpRpc_63bb636a9542a1::class,
            'InvokeCustomMethod' => AiobalePhpRpc_4ce884455c1f58::class,
            'IsNameAllowed' => AiobalePhpRpc_67e962c920d848::class,
            'IsPremium' => AiobalePhpRpc_b8fc52cac977ea::class,
            'IsPremiumBatch' => AiobalePhpRpc_1b98dd58f13158::class,
            'IsTwoFactorAuthenticationEnabled' => AiobalePhpRpc_113c2bc2e0e786::class,
            'JoinGroupCall' => AiobalePhpRpc_19a4fdc514028c::class,
            'LeaveGroupCall' => AiobalePhpRpc_1e59d95d4fcb6d::class,
            'ListTasks' => AiobalePhpRpc_56af6c5bbced24::class,
            'LoadArbaeenHistory' => AiobalePhpRpc_07139812bb2580::class,
            'LoadAvatars' => AiobalePhpRpc_08b51ef53be31b::class,
            'LoadCategories' => AiobalePhpRpc_d94f17595b55fb::class,
            'LoadCategoryFeedMessages' => AiobalePhpRpc_86f5280bc9fd87::class,
            'LoadEvexHistory' => AiobalePhpRpc_07711b320bdcda::class,
            'LoadExchangeHistory' => AiobalePhpRpc_2b90cafb830e21::class,
            'LoadFeedMessages' => AiobalePhpRpc_26912d51f98f05::class,
            'LoadFolderDialogs' => AiobalePhpRpc_4dba22765f568b::class,
            'LoadFolders' => AiobalePhpRpc_0d946331a566ef::class,
            'LoadFullGroups' => AiobalePhpRpc_026b211ee55625::class,
            'LoadFullUsersSequentially' => AiobalePhpRpc_de61c963ca41a6::class,
            'LoadGroupAvatars' => AiobalePhpRpc_f54daadc44fe3a::class,
            'LoadGroupedDialogs' => AiobalePhpRpc_84a5b20cbca579::class,
            'LoadGroups' => AiobalePhpRpc_971d1880f66b59::class,
            'LoadInternalFeedMessages' => AiobalePhpRpc_e0ef4d27d84efd::class,
            'LoadMedia' => AiobalePhpRpc_e25a508f4cc37b::class,
            'LoadOwnStickers' => AiobalePhpRpc_682843e720751f::class,
            'LoadPeerDialogs' => AiobalePhpRpc_e096532227ef9a::class,
            'LoadPeers' => AiobalePhpRpc_e1d88bc508d740::class,
            'LoadPinnedDialogs' => AiobalePhpRpc_803bfa9448be1d::class,
            'LoadReactions' => AiobalePhpRpc_60280aeb58c914::class,
            'LoadReplies' => AiobalePhpRpc_7335e7275b84dd::class,
            'LoadStickerCollection' => AiobalePhpRpc_f28c911145a255::class,
            'LoadTransactions' => AiobalePhpRpc_e76272167679b1::class,
            'LoadTransactionsByIDs' => AiobalePhpRpc_548c0997446e4a::class,
            'LogOut' => AiobalePhpRpc_f12ee48cb8ad21::class,
            'MakePayment' => AiobalePhpRpc_9933fd51330436::class,
            'MarkDialogsAsRead' => AiobalePhpRpc_7aca0365c9a35d::class,
            'MarkDialogsAsUnread' => AiobalePhpRpc_da416997ade4ab::class,
            'MentionRead' => AiobalePhpRpc_5f60fdb80204f5::class,
            'MergeCustomIncomeRecords' => AiobalePhpRpc_00acd3250695f1::class,
            'MergeIncreaseCreditRecords' => AiobalePhpRpc_ca5d19e9db549e::class,
            'MessageReactionsRead' => AiobalePhpRpc_4e1fb932940573::class,
            'MessageReceived' => AiobalePhpRpc_b58720084ca893::class,
            'ModifyCapacity' => AiobalePhpRpc_071994b598b366::class,
            'MuteParticipant' => AiobalePhpRpc_14bae4c7669726::class,
            'NotifyAboutDeviceInfo' => AiobalePhpRpc_6c38f5bee27f21::class,
            'OpenGoldGiftPacket' => AiobalePhpRpc_ae754ec1aaf4a6::class,
            'PayBill' => AiobalePhpRpc_f56db924a4d8b9::class,
            'PayByWallet' => AiobalePhpRpc_5d0a58cdff7aa0::class,
            'PayForMessage' => AiobalePhpRpc_c4128b79f0c7af::class,
            'PayMoneyRequestByWallet' => AiobalePhpRpc_d24b152b1fd195::class,
            'PeersWithScheduleTask' => AiobalePhpRpc_24d0665559da54::class,
            'PinDialogs' => AiobalePhpRpc_cf02b00c148a29::class,
            'Purchase' => AiobalePhpRpc_d82d5e97d3c9ad::class,
            'PurchaseMessage' => AiobalePhpRpc_e1ed8a6354fe64::class,
            'PurchaseMessageWithCharge' => AiobalePhpRpc_5f1f99c30e28da::class,
            'PurchasePackage' => AiobalePhpRpc_49100ace950dc8::class,
            'PurchaseWithCharge' => AiobalePhpRpc_5c6b25303c515e::class,
            'ReScheduleTask' => AiobalePhpRpc_a5af95583262df::class,
            'ReactToStory' => AiobalePhpRpc_9c38abb34cb316::class,
            'ReactivateApp' => AiobalePhpRpc_de6b397bc801ed::class,
            'ReceiveCall' => AiobalePhpRpc_0840410105ae68::class,
            'ReceiveMessageStream' => AiobalePhpRpc_2aa868a1bb9633::class,
            'RecommendPeer' => AiobalePhpRpc_fd6632bbadaa21::class,
            'RecoverPassword' => AiobalePhpRpc_9bfe5e6fbf36c1::class,
            'RegisterForEarnMoney' => AiobalePhpRpc_e90d104a49c21c::class,
            'RegisterGooglePush' => AiobalePhpRpc_24b28c8ae47205::class,
            'RegisterPush' => AiobalePhpRpc_04b156a23bab9b::class,
            'RejectCampaignMarket' => AiobalePhpRpc_2b05f31f864cdd::class,
            'RejectMarketJoinRequest' => AiobalePhpRpc_e176f58fce9cf7::class,
            'RemoveAvatar' => AiobalePhpRpc_4a08726c19c7b6::class,
            'RemoveCard' => AiobalePhpRpc_727a2606a236c9::class,
            'RemoveDefaultCard' => AiobalePhpRpc_285bb5fe9afb35::class,
            'RemoveDefaultCardNumber' => AiobalePhpRpc_643d3a5bc461b3::class,
            'RemoveDestinationCards' => AiobalePhpRpc_a68f8d078e8d6d::class,
            'RemoveDiscussionGroup' => AiobalePhpRpc_7b900120c29914::class,
            'RemoveGif' => AiobalePhpRpc_1f0df3a656fc5c::class,
            'RemoveGroupAvatar' => AiobalePhpRpc_2d21878720098d::class,
            'RemoveParticipant' => AiobalePhpRpc_d3c3f91ba66a08::class,
            'RemovePeer' => AiobalePhpRpc_607c59cb574e69::class,
            'RemoveStickerCollection' => AiobalePhpRpc_81b2ee00f704a6::class,
            'RemoveStickerPack' => AiobalePhpRpc_b61929eebaed84::class,
            'RemoveStory' => AiobalePhpRpc_5382a6fe0a394d::class,
            'RemoveTransaction' => AiobalePhpRpc_6e25bce9455919::class,
            'RemoveTransactionTags' => AiobalePhpRpc_f74af3cba48df0::class,
            'RemoveUserTags' => AiobalePhpRpc_9cc33999405310::class,
            'RenameSavedBill' => AiobalePhpRpc_db9ef027ce5e10::class,
            'ReorderFolders' => AiobalePhpRpc_de6e319ab92c27::class,
            'ReorderPinnedDialogs' => AiobalePhpRpc_614f81877080f7::class,
            'ReportDismiss' => AiobalePhpRpc_c7d9513753f67a::class,
            'RetryFailedAutoSentInvoice' => AiobalePhpRpc_2cf6bee483212f::class,
            'ReviveTransaction' => AiobalePhpRpc_a8ecb89a62adb9::class,
            'ScheduleTask' => AiobalePhpRpc_8d578e65db3a33::class,
            'SearchContent' => AiobalePhpRpc_ac1a14e433b338::class,
            'SearchDialog' => AiobalePhpRpc_d9f145bdac371f::class,
            'SearchMarket' => AiobalePhpRpc_039e2f6fd30346::class,
            'SearchMarketPopular' => AiobalePhpRpc_e167a06996f379::class,
            'SearchMedia' => AiobalePhpRpc_1e910e1ad39cd1::class,
            'SearchMembers' => AiobalePhpRpc_9cd739e0b806a4::class,
            'SearchMessageMore' => AiobalePhpRpc_520e5f8487d050::class,
            'SearchMessages' => AiobalePhpRpc_f1e754fe916a9d::class,
            'SearchPeer' => AiobalePhpRpc_eed3e984e41703::class,
            'SearchProduct' => AiobalePhpRpc_9a42dad847be35::class,
            'SearchServices' => AiobalePhpRpc_93d10c47ad0086::class,
            'Send' => AiobalePhpRpc_33100ba769febb::class,
            'SendAdminMessage' => AiobalePhpRpc_f3abf8e4cc37d7::class,
            'SendAuthenticatedInlineCallBackData' => AiobalePhpRpc_1992d96b28a699::class,
            'SendBatch' => AiobalePhpRpc_7ed3acd39940fd::class,
            'SendCallReaction' => AiobalePhpRpc_2752bd9c39dbdf::class,
            'SendChangePhoneVerificationCode' => AiobalePhpRpc_5376ab27c138db::class,
            'SendDeleteAccountVerificationCode' => AiobalePhpRpc_2a4556eb074d29::class,
            'SendEvent' => AiobalePhpRpc_8d88971dbef443::class,
            'SendFactorMessage' => AiobalePhpRpc_0f87fac4e9aef6::class,
            'SendFanoosEvent' => AiobalePhpRpc_3973f79335d9c5::class,
            'SendFeedBack' => AiobalePhpRpc_5a55b833fb1446::class,
            'SendGoldGiftPacket' => AiobalePhpRpc_f6bc30da599686::class,
            'SendInlineCallBackData' => AiobalePhpRpc_638e7b7652cf21::class,
            'SendInlineCallback' => AiobalePhpRpc_5237f57f2125f6::class,
            'SendInvoiceForPaymentHistoryRecord' => AiobalePhpRpc_63bd5f3f5b75a2::class,
            'SendLegalOrgChannelIncome' => AiobalePhpRpc_54691750dfa9c5::class,
            'SendMiniAppData' => AiobalePhpRpc_dd6324014d6a73::class,
            'SendMultiMediaMessage' => AiobalePhpRpc_0061cb5769dd99::class,
            'SetAdTarget' => AiobalePhpRpc_0941dc3134dfb8::class,
            'SetAvailableReactions' => AiobalePhpRpc_cf391f0dc745d4::class,
            'SetCanSeeHistory' => AiobalePhpRpc_1f02f433ac6349::class,
            'SetCanSeeMessages' => AiobalePhpRpc_a14b3f416dad75::class,
            'SetCapacityMaxViews' => AiobalePhpRpc_9e954eae88ef97::class,
            'SetChannelInvoiceInfo' => AiobalePhpRpc_732d9fbe89de4c::class,
            'SetChannelOwnerBankInformation' => AiobalePhpRpc_1cb503aa0d7302::class,
            'SetConfig' => AiobalePhpRpc_acc5e805f7aaa1::class,
            'SetDefaultCard' => AiobalePhpRpc_cf42df2f14c598::class,
            'SetDiscussionGroup' => AiobalePhpRpc_1b9915d05374d5::class,
            'SetGenericDeepLinks' => AiobalePhpRpc_6eb10f8bf2787f::class,
            'SetLinkTitle' => AiobalePhpRpc_9e959dba2094f0::class,
            'SetMarketBanners' => AiobalePhpRpc_31eb9254c9ff0c::class,
            'SetMarketingToolAction' => AiobalePhpRpc_996b4b7147475c::class,
            'SetMemberCustomTitle' => AiobalePhpRpc_4b8beb303b53d0::class,
            'SetNewPassword' => AiobalePhpRpc_15d39c8bcae816::class,
            'SetOnBoardingChannels' => AiobalePhpRpc_c36357dda65f76::class,
            'SetOnboardingData' => AiobalePhpRpc_343c1ea7b3cf5b::class,
            'SetPassword' => AiobalePhpRpc_62c28dcb152fa0::class,
            'SetPopularSearches' => AiobalePhpRpc_4cb36027e0a08d::class,
            'SetSignMessages' => AiobalePhpRpc_cda662fef0f77e::class,
            'SetSlowMode' => AiobalePhpRpc_87fdbea12d35d9::class,
            'SetUserAuthData' => AiobalePhpRpc_61fa0bd1f8bb4a::class,
            'SetUserBadge' => AiobalePhpRpc_61a24c4f8e587e::class,
            'SetUserPrivacyConfig' => AiobalePhpRpc_6ff63ba1ce6802::class,
            'SetUserPrivacyStatus' => AiobalePhpRpc_dca7de6550186e::class,
            'SetUserStoryConfig' => AiobalePhpRpc_4e4f7c0e7a365a::class,
            'SplitTransaction' => AiobalePhpRpc_80a4b01873dc12::class,
            'StartAd' => AiobalePhpRpc_7b364cfbb65099::class,
            'StartBaleCustomAd' => AiobalePhpRpc_a376fc26b977c7::class,
            'StartBot' => AiobalePhpRpc_7fc9980b1938c6::class,
            'StartCall' => AiobalePhpRpc_05cc5d07efa71a::class,
            'StartChannelAdFromOrder' => AiobalePhpRpc_6fb3e439f4f9cc::class,
            'StartFromOrder' => AiobalePhpRpc_975efd352548f2::class,
            'StartGroupCall' => AiobalePhpRpc_5c15ea5b3880f0::class,
            'StartRecording' => AiobalePhpRpc_5aa5d74627f4d9::class,
            'StartStream' => AiobalePhpRpc_a7a2fb7dcb3027::class,
            'StopAllBaleCustomAds' => AiobalePhpRpc_39fe18ebf7c83d::class,
            'StopRecording' => AiobalePhpRpc_9aea4766c81e42::class,
            'SubmitCallFeedback' => AiobalePhpRpc_e217221028468b::class,
            'SubmitChannelAdOrder' => AiobalePhpRpc_ed036a2d46b269::class,
            'SubmitDialogAdOrder' => AiobalePhpRpc_7ff0be141c7b87::class,
            'SubmitMarketFeedback' => AiobalePhpRpc_0ea9473b74da85::class,
            'SubmitPhotoForBaleCustomAd' => AiobalePhpRpc_189882a588daf7::class,
            'SubmitReview' => AiobalePhpRpc_2e225cf8cf18cc::class,
            'SubscribeFromGroupOnline' => AiobalePhpRpc_4332b4dd7951d9::class,
            'SubscribeFromOnline' => AiobalePhpRpc_62cf4678b3081b::class,
            'SubscribeToGroupOnline' => AiobalePhpRpc_7998343593bde7::class,
            'SubscribeToOnline' => AiobalePhpRpc_f2c71d0832bda5::class,
            'SubscribeToThreadUpdates' => AiobalePhpRpc_941b91cb9516d9::class,
            'TakeCallAction' => AiobalePhpRpc_1edde7e9d42d81::class,
            'TerminateAllSessions' => AiobalePhpRpc_00a925c68e32c0::class,
            'TerminateSession' => AiobalePhpRpc_6231e0fe23e9ee::class,
            'Transfer' => AiobalePhpRpc_905aca74d21042::class,
            'TransferMoneyByCard' => AiobalePhpRpc_01760d5013a286::class,
            'UnArchiveDialogs' => AiobalePhpRpc_46add2b5bb9784::class,
            'UnScheduleTask' => AiobalePhpRpc_cd19417c57e5f1::class,
            'UnpinDialogs' => AiobalePhpRpc_ff3c521f38f2c6::class,
            'UnregisterAllPushCredentials' => AiobalePhpRpc_c496ae0a8ca236::class,
            'UnregisterGooglePush' => AiobalePhpRpc_2dd8cae105cac8::class,
            'UnregisterPush' => AiobalePhpRpc_198a52b346c05a::class,
            'UnsubscribeFromThreadUpdates' => AiobalePhpRpc_972082aa6848de::class,
            'UpdateBusinessAd' => AiobalePhpRpc_32f12c369300ba::class,
            'UpdateCRMIssue' => AiobalePhpRpc_bde9c9c04b77bc::class,
            'UpdateClick' => AiobalePhpRpc_e3fc7a0b987023::class,
            'UpdateGroupStatus' => AiobalePhpRpc_cabe2873187967::class,
            'UpdateLayout' => AiobalePhpRpc_0cb831401f1024::class,
            'UpdateMarketInfo' => AiobalePhpRpc_ca5dda7d7f27fe::class,
            'UpdateSearchContentClick' => AiobalePhpRpc_c54ff4fc6d126a::class,
            'UpdateView' => AiobalePhpRpc_f13b56c5356fad::class,
            'UpgradeKifpool' => AiobalePhpRpc_aed688e6df94ad::class,
            'UseGif' => AiobalePhpRpc_a2f770bd091320::class,
            'UserHasAccess' => AiobalePhpRpc_ed23e970875732::class,
            'ValidateOTP' => AiobalePhpRpc_a36f4c57e728bb::class,
            'VerifyCashOut' => AiobalePhpRpc_482bd419d2a0c6::class,
            'VerifyCashOutKifpool' => AiobalePhpRpc_6f978c50926c32::class,
            'VerifyEmail' => AiobalePhpRpc_4395e55e42ed08::class,
            'VerifyOTP' => AiobalePhpRpc_33752a4e539344::class,
            'VerifyPassword' => AiobalePhpRpc_fd03710a125cf0::class,
            'VerifyPasswordRecovery' => AiobalePhpRpc_958e1f7f9d3051::class,
            'VerifyPeer' => AiobalePhpRpc_0cc5eef4a580c5::class,
            'VerifyPurchaseMessage' => AiobalePhpRpc_145c23d31951bb::class,
            'VerifyQRCode' => AiobalePhpRpc_d27f39aa9f3df3::class,
            'VerifyUserArbaeenAuthority' => AiobalePhpRpc_7e7f57cd3fd111::class,
            'VerifyUserArbaeenExtraInfo' => AiobalePhpRpc_1809817b1fc0fa::class,
            'VerifyUserEvexAuthority' => AiobalePhpRpc_4d0df091d47fcf::class,
            'VerifyUserEvexExtraInfo' => AiobalePhpRpc_5e9b9da8f3ff46::class,
            'VerifyUserExchangeAuthority' => AiobalePhpRpc_387120dfa3fc6d::class,
            'Vote' => AiobalePhpRpc_b9206f54d40bb3::class,
            'bale.arbaeen.v1.Arbaeen.SendOTP' => AiobalePhpRpc_d198bcb8908085::class,
            'bale.groups.v1.Groups.PinMessage' => \Aiobale\Methods\Groups\PinGroupMessage::class,
            'bale.ramz.v1.Ramz.SendOTP' => AiobalePhpRpc_c8ef1a517f761f::class,
        ];
    }
}