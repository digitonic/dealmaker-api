<?php

namespace Digitonic\DealmakerApi\Resource;

use Digitonic\DealmakerApi\Requests\Misc\GetDealsIdInvestorsInvestorIdPaymentsExpressWireInstructions;
use Digitonic\DealmakerApi\Requests\Misc\GetDealsIdInvestorsPaymentsExpressWireInstructions;
use Digitonic\DealmakerApi\Requests\Misc\GetWebhooks;
use Digitonic\DealmakerApi\Requests\Misc\GetWebhooksDealId;
use Digitonic\DealmakerApi\Requests\Misc\GetWebhooksDealsSearch;
use Digitonic\DealmakerApi\Requests\Misc\GetWebhooksSecurityToken;
use Digitonic\DealmakerApi\Requests\Misc\PostWebhooks;
use Digitonic\DealmakerApi\Requests\Misc\PutWebhooksId;
use Digitonic\DealmakerApi\Resource;
use Saloon\Http\Response;

class Misc extends Resource
{
    public function getDealsIdInvestorsInvestorIdPaymentsExpressWireInstructions(int $id, int $investorId): Response
    {
        return $this->connector->send(new GetDealsIdInvestorsInvestorIdPaymentsExpressWireInstructions($id, $investorId));
    }

    public function getDealsIdInvestorsPaymentsExpressWireInstructions(int $id): Response
    {
        return $this->connector->send(new GetDealsIdInvestorsPaymentsExpressWireInstructions($id));
    }

    public function putWebhooksId(int $id): Response
    {
        return $this->connector->send(new PutWebhooksId($id));
    }

    public function getWebhooksDealsSearch(): Response
    {
        return $this->connector->send(new GetWebhooksDealsSearch());
    }

    public function getWebhooksSecurityToken(): Response
    {
        return $this->connector->send(new GetWebhooksSecurityToken());
    }

    public function getWebhooksDealId(int $id): Response
    {
        return $this->connector->send(new GetWebhooksDealId($id));
    }

    /**
     * @param  int  $page Page offset to fetch.
     * @param  int  $offset Pad a number of results.
     */
    public function getWebhooks(?int $page, ?int $offset): Response
    {
        return $this->connector->send(new GetWebhooks($page, $offset));
    }

    public function postWebhooks(): Response
    {
        return $this->connector->send(new PostWebhooks());
    }
}
