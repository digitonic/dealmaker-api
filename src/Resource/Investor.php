<?php

namespace Digitonic\DealmakerApi\Resource;

use Digitonic\DealmakerApi\Requests\Investor\Add506cDocument;
use Digitonic\DealmakerApi\Requests\Investor\AddDocument;
use Digitonic\DealmakerApi\Requests\Investor\BulkUploadInvestors;
use Digitonic\DealmakerApi\Requests\Investor\CreateInvestor;
use Digitonic\DealmakerApi\Requests\Investor\DeleteDocument;
use Digitonic\DealmakerApi\Requests\Investor\DeleteInvestorProfile;
use Digitonic\DealmakerApi\Requests\Investor\EditInvestorTags;
use Digitonic\DealmakerApi\Requests\Investor\GetEnforcements;
use Digitonic\DealmakerApi\Requests\Investor\GetInvestor;
use Digitonic\DealmakerApi\Requests\Investor\GetInvestorOtpLink;
use Digitonic\DealmakerApi\Requests\Investor\ListInvestors;
use Digitonic\DealmakerApi\Requests\Investor\PatchInvestor;
use Digitonic\DealmakerApi\Requests\Investor\UpdateInvestor;
use Digitonic\DealmakerApi\Resource;
use Saloon\Http\Response;

class Investor extends Resource
{
    public function deleteDocument(int $id, int $investorId, int $documentId): Response
    {
        return $this->connector->send(new DeleteDocument($id, $investorId, $documentId));
    }

    /**
     * @param  int  $id The deal id.
     * @param  int  $investorId The investor id.
     */
    public function addDocument(int $id, int $investorId): Response
    {
        return $this->connector->send(new AddDocument($id, $investorId));
    }

    /**
     * @param  int  $id The deal id.
     * @param  int  $investorId The investor id.
     */
    public function getInvestorOtpLink(int $id, int $investorId): Response
    {
        return $this->connector->send(new GetInvestorOtpLink($id, $investorId));
    }

    /**
     * @param  int  $id The deal id.
     * @param  int  $page Page offset to fetch.
     * @param  int  $offset Pad a number of results.
     * @param  array  $investorIds An array of investor ids.
     * @param  string  $q The search query for investors. For additional information on filtering and seach, click [here](#section/Search-and-Filtering-(The-q-parameter)/Keyword-filtering)
     */
    public function listInvestors(int $id, ?int $page, ?int $offset, ?array $investorIds, ?string $q): Response
    {
        return $this->connector->send(new ListInvestors($id, $page, $offset, $investorIds, $q));
    }

    /**
     * @param  int  $id The deal id.
     */
    public function createInvestor(int $id): Response
    {
        return $this->connector->send(new CreateInvestor($id));
    }

    /**
     * @param  int  $id The deal id.
     * @param  int  $investorId The investor id.
     */
    public function getInvestor(int $id, int $investorId): Response
    {
        return $this->connector->send(new GetInvestor($id, $investorId));
    }

    /**
     * @param  int  $id The deal id.
     * @param  int  $investorId The investor id.
     */
    public function updateInvestor(int $id, int $investorId): Response
    {
        return $this->connector->send(new UpdateInvestor($id, $investorId));
    }

    /**
     * @param  int  $id The deal id.
     * @param  int  $investorId The investor id.
     */
    public function patchInvestor(int $id, int $investorId): Response
    {
        return $this->connector->send(new PatchInvestor($id, $investorId));
    }

    public function editInvestorTags(int $id, int $investorId): Response
    {
        return $this->connector->send(new EditInvestorTags($id, $investorId));
    }

    /**
     * @param  int  $id The deal id.
     * @param  int  $investorId The investor id.
     */
    public function add506cDocument(int $id, int $investorId): Response
    {
        return $this->connector->send(new Add506cDocument($id, $investorId));
    }

    /**
     * @param  int  $id The deal id.
     */
    public function bulkUploadInvestors(int $id): Response
    {
        return $this->connector->send(new BulkUploadInvestors($id));
    }

    public function getEnforcements(int $id, int $investorId, int $searchEntityId): Response
    {
        return $this->connector->send(new GetEnforcements($id, $investorId, $searchEntityId));
    }

    public function deleteInvestorProfile(int $type, int $id): Response
    {
        return $this->connector->send(new DeleteInvestorProfile($type, $id));
    }
}
