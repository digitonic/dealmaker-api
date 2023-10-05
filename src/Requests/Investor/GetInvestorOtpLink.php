<?php

namespace Digitonic\DealmakerApi\Requests\Investor;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getInvestorOtpLink
 *
 * Get OTP access link for deal investor by id
 */
class GetInvestorOtpLink extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/deals/{$this->id}/investors/{$this->investorId}/otp_access_link";
    }

    /**
     * @param  int  $id The deal id.
     * @param  int  $investorId The investor id.
     */
    public function __construct(
        protected int $id,
        protected int $investorId,
    ) {
    }
}
