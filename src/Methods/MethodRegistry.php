<?php

declare(strict_types=1);

namespace Aiobale\Methods;

final class MethodRegistry
{
    public static function all(): array
    {
        $methods = [
            "AddContact" => \Aiobale\Methods\User\AddContact::class,
            "BlockUser" => \Aiobale\Methods\User\BlockUser::class,
            "CheckNickName" => \Aiobale\Methods\User\CheckNickName::class,
            "ClearChat" => \Aiobale\Methods\Messaging\ClearChat::class,
            "CreateGroup" => \Aiobale\Methods\Groups\CreateGroup::class,
            "DeleteChat" => \Aiobale\Methods\Messaging\DeleteChat::class,
            "DeleteMessage" => \Aiobale\Methods\Messaging\DeleteMessage::class,
            "EditAbout" => \Aiobale\Methods\User\EditAbout::class,
            "EditChannelUsername" => \Aiobale\Methods\Groups\EditChannelUsername::class,
            "EditGroupAbout" => \Aiobale\Methods\Groups\EditGroupAbout::class,
            "EditGroupTitle" => \Aiobale\Methods\Groups\EditGroupTitle::class,
            "EditName" => \Aiobale\Methods\User\EditName::class,
            "EditNickName" => \Aiobale\Methods\User\EditNickName::class,
            "EditParameter" => \Aiobale\Methods\Configs\EditParameter::class,
            "EditUserLocalName" => \Aiobale\Methods\User\EditUserLocalName::class,
            "ForwardMessages" => \Aiobale\Methods\Messaging\ForwardMessages::class,
            "GetBannedUsers" => \Aiobale\Methods\Groups\GetBannedUsers::class,
            "GetContacts" => \Aiobale\Methods\User\GetContacts::class,
            "GetFileUploadUrl" => \Aiobale\Methods\Files\GetFileUploadUrl::class,
            "GetFileUrl" => \Aiobale\Methods\Files\GetFileUrl::class,
            "GetFullGroup" => \Aiobale\Methods\Groups\GetFullGroup::class,
            "GetGroupInviteURL" => \Aiobale\Methods\Groups\GetGroupInviteURL::class,
            "GetGroupPreview" => \Aiobale\Methods\Groups\GetGroupPreview::class,
            "GetMemberPermissions" => \Aiobale\Methods\Groups\GetMemberPermissions::class,
            "GetMessageReactionsList" => \Aiobale\Methods\Abacus\GetMessageReactionsList::class,
            "GetMessageUpvoters" => \Aiobale\Methods\Magazine\GetMessageUpvoters::class,
            "GetMessagesReactions" => \Aiobale\Methods\Abacus\GetMessagesReactions::class,
            "GetMessagesViews" => \Aiobale\Methods\Abacus\GetMessagesViews::class,
            "GetMyKifpools" => \Aiobale\Methods\Kifpool\GetMyKifpools::class,
            "GetParameters" => \Aiobale\Methods\Configs\GetParameters::class,
            "GetPins" => \Aiobale\Methods\Groups\GetPins::class,
            "ImportContacts" => \Aiobale\Methods\User\ImportContacts::class,
            "InviteUsers" => \Aiobale\Methods\Groups\InviteUsers::class,
            "JoinGroup" => \Aiobale\Methods\Groups\JoinGroup::class,
            "JoinPublicGroup" => \Aiobale\Methods\Groups\JoinPublicGroup::class,
            "KickUser" => \Aiobale\Methods\Groups\KickUser::class,
            "LeaveGroup" => \Aiobale\Methods\Groups\LeaveGroup::class,
            "LoadBlockedUsers" => \Aiobale\Methods\User\LoadBlockedUsers::class,
            "LoadDialogs" => \Aiobale\Methods\Messaging\LoadDialogs::class,
            "LoadFullUsers" => \Aiobale\Methods\User\LoadFullUsers::class,
            "LoadHistory" => \Aiobale\Methods\Messaging\LoadHistory::class,
            "LoadMembers" => \Aiobale\Methods\Groups\LoadMembers::class,
            "LoadPinnedMessages" => \Aiobale\Methods\Messaging\LoadPinnedMessages::class,
            "LoadUsers" => \Aiobale\Methods\User\LoadUsers::class,
            "MakeUserAdmin" => \Aiobale\Methods\Groups\MakeUserAdmin::class,
            "MessageRead" => \Aiobale\Methods\Messaging\MessageRead::class,
            "MessageRemoveReaction" => \Aiobale\Methods\Abacus\MessageRemoveReaction::class,
            "MessageSetReaction" => \Aiobale\Methods\Abacus\MessageSetReaction::class,
            "OpenGiftPacket" => \Aiobale\Methods\Giftpacket\OpenGiftPacket::class,
            "PinGroupMessage" => \Aiobale\Methods\Groups\PinGroupMessage::class,
            "PinMessage" => \Aiobale\Methods\Messaging\PinMessage::class,
            "RemoveAllPins" => \Aiobale\Methods\Groups\RemoveAllPins::class,
            "RemoveContact" => \Aiobale\Methods\User\RemoveContact::class,
            "RemoveSinglePin" => \Aiobale\Methods\Groups\RemoveSinglePin::class,
            "RemoveUserAdmin" => \Aiobale\Methods\Groups\RemoveUserAdmin::class,
            "ResetContacts" => \Aiobale\Methods\User\ResetContacts::class,
            "RevokeInviteURL" => \Aiobale\Methods\Groups\RevokeInviteURL::class,
            "RevokeUpvotedPost" => \Aiobale\Methods\Magazine\RevokeUpvotedPost::class,
            "SearchContact" => \Aiobale\Methods\User\SearchContact::class,
            "SendGiftPacketWithWallet" => \Aiobale\Methods\Giftpacket\SendGiftPacketWithWallet::class,
            "SendMessage" => \Aiobale\Methods\Messaging\SendMessage::class,
            "SendReport" => \Aiobale\Methods\Report\SendReport::class,
            "SetGroupDefaultPermissions" => \Aiobale\Methods\Groups\SetGroupDefaultPermissions::class,
            "SetMemberPermissions" => \Aiobale\Methods\Groups\SetMemberPermissions::class,
            "SetOnline" => \Aiobale\Methods\Presence\SetOnline::class,
            "SetRestriction" => \Aiobale\Methods\Groups\SetRestriction::class,
            "SignOut" => \Aiobale\Methods\Auth\SignOut::class,
            "SignUp" => \Aiobale\Methods\Auth\SignUp::class,
            "StartPhoneAuth" => \Aiobale\Methods\Auth\StartPhoneAuth::class,
            "StopTyping" => \Aiobale\Methods\Presence\StopTyping::class,
            "TransferOwnership" => \Aiobale\Methods\Groups\TransferOwnership::class,
            "Typing" => \Aiobale\Methods\Presence\Typing::class,
            "UnPinMessages" => \Aiobale\Methods\Messaging\UnPinMessages::class,
            "UnbanUser" => \Aiobale\Methods\Groups\UnbanUser::class,
            "UnblockUser" => \Aiobale\Methods\User\UnblockUser::class,
            "UpdateMessage" => \Aiobale\Methods\Messaging\UpdateMessage::class,
            "UpvotePost" => \Aiobale\Methods\Magazine\UpvotePost::class,
            "ValidateCode" => \Aiobale\Methods\Auth\ValidateCode::class,
            "ValidatePassword" => \Aiobale\Methods\Auth\ValidatePassword::class,
        ];

        return array_replace($methods, \Aiobale\Methods\Generated\AiobalePhpRpcCatalog::all());
    }

    public static function resolve(string $name): ?string
    {
        $normalized = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $name) ?? $name);
        foreach (self::all() as $className => $class) {
            $candidate = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $className) ?? $className);
            if ($candidate === $normalized) {
                return $class;
            }
        }
        return null;
    }
}
