<?php

/*
 * This file is part of BedrockProtocol.
 * Copyright (C) 2014-2022 PocketMine Team <https://github.com/pmmp/BedrockProtocol>
 *
 * BedrockProtocol is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

declare(strict_types=1);

namespace pocketmine\network\mcpe\protocol\types\entity;

final class EntityMetadataFlags{

	private function __construct(){
		//NOOP
	}
	public const ONFIRE = 0;
	public const SNEAKING = 1;
	public const RIDING = 2;
	public const SPRINTING = 3;
	public const ACTION = 4;
	public const INVISIBLE = 5;
	public const TEMPTED = 6;
	public const INLOVE = 7; // villager hearts
	public const SADDLED = 8;
	public const POWERED = 9; // charged creeper
	public const IGNITED = 10;
	public const BABY = 11;
	public const CONVERTING = 12;
	public const CRITICAL = 13; // critical arrow from fully drawn-back bow
	public const CAN_SHOW_NAMETAG = 14;
	public const ALWAYS_SHOW_NAMETAG = 15;
	public const IMMOBILE = 16, NO_AI = 16;
	public const SILENT = 17;
	public const WALLCLIMBING = 18;
	public const CAN_CLIMB = 19;
	public const SWIMMER = 20;
	public const CAN_FLY = 21;
	public const WALKER = 22;
	public const RESTING = 23;
	public const SITTING = 24;
	public const ANGRY = 25;
	public const INTERESTED = 26;
	public const CHARGED = 27; // transitioning to pre-shooting state of burst ranged attacks, ex: when blaze emits flame particles right before firing
	public const TAMED = 28;
	public const ORPHANED = 29;
	public const LEASHED = 30;
	public const SHEARED = 31;
	public const GLIDING = 32;
	public const ELDER = 33; // elder guardian
	public const MOVING = 34;
	public const BREATHING = 35;
	public const CHESTED = 36; // ex: donkey with a chest equipped
	public const STACKABLE = 37; // if 2 (or more) entities have this flag then they will have solid collision with each other
	public const SHOWBASE = 38; // if an entity's "bottom" is rendered
	public const REARING = 39;
	public const VIBRATING = 40; // zombie villager in the process of being cured
	public const IDLING = 41;
	public const EVOKER_SPELL = 42;
	public const CHARGE_ATTACK = 43;
	public const WASD_CONTROLLED = 44; // rideable entity can be controlled by player input
	public const CAN_POWER_JUMP = 45;
	public const LINGER = 46;
	public const HAS_COLLISION = 47;
	public const AFFECTED_BY_GRAVITY = 48;
	public const FIRE_IMMUNE = 49;
	public const DANCING = 50; // for parrot
	public const ENCHANTED = 51; // splash potion glint
	public const SHOW_TRIDENT_ROPE = 52; // tridents show an animated rope when enchanted with loyalty after they are thrown and return to their owner. To be combined with DATA_OWNER_EID
	public const CONTAINER_PRIVATE = 53; //inventory is private, doesn't drop contents when killed if true
	public const TRANSFORMING = 54;
	public const SPIN_ATTACK = 55; // using riptide trident
	public const SWIMMING = 56;
	public const BRIBED = 57; //dolphins have this set when they go to find treasure for the player
	public const PREGNANT = 58; // for turtle
	public const LAYING_EGG = 59; // for turtle
	public const RIDER_CAN_PICK = 60; //???
	public const TRANSITION_SITTING = 61;
	public const EATING = 62; // for panda
	public const LAYING_DOWN = 63; // for panda
	public const SNEEZING = 64; // for panda
	public const TRUSTING = 65; // for panda
	public const ROLLING = 66; // for panda
	public const SCARED = 67;
	public const IN_SCAFFOLDING = 68;
	public const OVER_SCAFFOLDING = 69;
	public const FALL_THROUGH_SCAFFOLDING = 70;
	public const BLOCKING = 71; //shield
	public const TRANSITION_BLOCKING = 72;
	public const BLOCKED_USING_SHIELD = 73;
	public const BLOCKED_USING_DAMAGED_SHIELD = 74;
	public const SLEEPING = 75;
	public const WANTS_TO_WAKE = 76;
	public const TRADE_INTEREST = 77;
	public const DOOR_BREAKER = 78; //...
	public const BREAKING_OBSTRUCTION = 79;
	public const DOOR_OPENER = 80; //...
	public const ILLAGER_CAPTAIN = 81;
	public const STUNNED = 82; // for ravager
	public const ROARING = 83; // for ravager
	public const DELAYED_ATTACKING = 84;
	public const AVOIDING_MOBS = 85;
	public const AVOIDING_BLOCK = 86;
	public const FACING_TARGET_TO_RANGE_ATTACK = 87;
	public const HIDDEN_WHEN_INVISIBLE = 88; //??????????????????
	public const IS_IN_UI = 89;
	public const STALKING = 90;
	public const EMOTING = 91;
	public const CELEBRATING = 92; // raid celebration
	public const ADMIRING = 93; // for piglin
	public const CELEBRATING_SPECIAL = 94; // for piglin 
	public const OUT_OF_CONTROL = 95; // when a boat is resurfacing from deep water
	public const RAM_ATTACK = 96; // for goat
	public const PLAYING_DEAD = 97; // for axolotl
	public const IN_ASCENDABLE_BLOCK = 98;
	public const OVER_DESCENDABLE_BLOCK = 99;
	public const CROAKING = 100; // for frog
	public const EAT_MOB = 101; // for frog
}
