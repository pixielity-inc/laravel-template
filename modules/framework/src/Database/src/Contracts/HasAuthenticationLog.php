<?php

namespace Pixielity\Database\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Carbon;

/**
 * HasAuthenticationLog Interface.
 *
 * Defines the contract for models (typically User) that have authentication logs.
 * Works with rappasoft/laravel-authentication-log package.
 *
 * ## Purpose:
 * - Provides consistent authentication log access across user models
 * - Defines standard methods for authentication tracking
 * - Ensures type safety for authentication log operations
 * - Centralizes authentication log functionality
 *
 * ## Usage:
 * ```php
 * use Pixielity\Database\Contracts\HasAuthenticationLog as HasAuthenticationLogContract;
 * use Pixielity\Database\Traits\HasAuthenticationLog;
 *
 * class User extends Model implements HasAuthenticationLogContract
 * {
 *     use HasAuthenticationLog;
 * }
 *
 * // Access authentication logs
 * $user->authentications;              // All auth logs
 * $user->lastLoginAt();                // Last login timestamp
 * $user->getLoginStats();              // Complete statistics
 * $user->activeSessions();             // Active sessions
 * $user->detectSuspiciousActivity();   // Check for threats
 * ```
 *
 * @since 1.0.0
 */
interface HasAuthenticationLog
{
    /**
     * Get all authentication logs for this user.
     */
    public function authentications(): MorphMany;

    /**
     * Alias for authentications() to match our naming convention.
     */
    public function authenticationLogs(): MorphMany;

    /**
     * Get the latest authentication log.
     */
    public function latestAuthentication(): MorphOne;

    /**
     * Get notification channels for authentication events.
     *
     * @return array Array of notification channels (e.g., ['mail', 'slack'])
     */
    public function notifyAuthenticationLogVia(): array;

    /**
     * Get the timestamp of the last login (successful or failed).
     */
    public function lastLoginAt(): ?Carbon;

    /**
     * Get the timestamp of the last successful login.
     */
    public function lastSuccessfulLoginAt(): ?Carbon;

    /**
     * Get the IP address of the last login.
     */
    public function lastLoginIp(): ?string;

    /**
     * Get the IP address of the last successful login.
     */
    public function lastSuccessfulLoginIp(): ?string;

    /**
     * Get the timestamp of the previous login (before the last one).
     */
    public function previousLoginAt(): ?Carbon;

    /**
     * Get the IP address of the previous login.
     */
    public function previousLoginIp(): ?string;

    /**
     * Get comprehensive login statistics.
     *
     * @return array Array with keys: total_logins, failed_attempts, unique_devices, etc.
     */
    public function getLoginStats(): array;

    /**
     * Get the total number of successful logins.
     */
    public function getTotalLogins(): int;

    /**
     * Get the number of failed login attempts.
     */
    public function getFailedAttempts(): int;

    /**
     * Get the number of unique devices used.
     */
    public function getUniqueDevicesCount(): int;

    /**
     * Get the number of suspicious activities detected.
     */
    public function getSuspiciousActivitiesCount(): int;

    /**
     * Get currently active sessions (not logged out).
     *
     * @return Builder
     */
    public function activeSessions();

    /**
     * Get active sessions as a collection.
     */
    public function getActiveSessions(): Collection;

    /**
     * Get the count of active sessions.
     */
    public function getActiveSessionsCount(): int;

    /**
     * Revoke a specific session.
     *
     * @param  int  $sessionId The session ID to revoke
     * @return bool True if revoked successfully, false otherwise
     */
    public function revokeSession(int $sessionId): bool;

    /**
     * Revoke all sessions except the current one.
     *
     * @param  string|null $currentDeviceId The current device ID to keep active
     * @return int         Number of sessions revoked
     */
    public function revokeAllOtherSessions(?string $currentDeviceId = null): int;

    /**
     * Revoke all sessions for this user.
     *
     * @return int Number of sessions revoked
     */
    public function revokeAllSessions(): int;

    /**
     * Get all devices used by this user.
     */
    public function getDevices(): Collection;

    /**
     * Mark a device as trusted.
     *
     * @param  string $deviceId The device ID to trust
     * @return bool   True if marked as trusted successfully
     */
    public function trustDevice(string $deviceId): bool;

    /**
     * Remove trust from a device.
     *
     * @param  string $deviceId The device ID to untrust
     * @return bool   True if untrusted successfully
     */
    public function untrustDevice(string $deviceId): bool;

    /**
     * Update the name of a device.
     *
     * @param  string $deviceId The device ID
     * @param  string $name     The new device name
     * @return bool   True if updated successfully
     */
    public function updateDeviceName(string $deviceId, string $name): bool;

    /**
     * Check if a device is trusted.
     *
     * @param  string $deviceId The device ID to check
     * @return bool   True if trusted, false otherwise
     */
    public function isDeviceTrusted(string $deviceId): bool;

    /**
     * Detect suspicious activity patterns.
     *
     * Returns an array of detected suspicious activities with details.
     *
     * @return array Array of suspicious activities
     */
    public function detectSuspiciousActivity(): array;
}
