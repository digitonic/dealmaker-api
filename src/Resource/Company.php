<?php

namespace Digitonic\DealmakerApi\Resource;

use Digitonic\DealmakerApi\Requests\Company\CreateBulkUpload;
use Digitonic\DealmakerApi\Requests\Company\CreateBulkUploadDetail;
use Digitonic\DealmakerApi\Requests\Company\CreateCompany;
use Digitonic\DealmakerApi\Requests\Company\CreateShareholderAction;
use Digitonic\DealmakerApi\Requests\Company\GetBulkUpload;
use Digitonic\DealmakerApi\Requests\Company\GetBulkUploadDetailsErrors;
use Digitonic\DealmakerApi\Requests\Company\GetBulkUploads;
use Digitonic\DealmakerApi\Requests\Company\GetCompanies;
use Digitonic\DealmakerApi\Requests\Company\GetCompany;
use Digitonic\DealmakerApi\Requests\Company\GetDetailsErrorsGrouped;
use Digitonic\DealmakerApi\Requests\Company\GetDividends;
use Digitonic\DealmakerApi\Resource;
use Saloon\Http\Response;

class Company extends Resource
{
    /**
     * @param  int  $page Page offset to fetch.
     * @param  int  $offset Pad a number of results.
     */
    public function getCompanies(?int $page, ?int $offset): Response
    {
        return $this->connector->send(new GetCompanies($page, $offset));
    }

    public function createCompany(): Response
    {
        return $this->connector->send(new CreateCompany());
    }

    public function getCompany(int $id): Response
    {
        return $this->connector->send(new GetCompany($id));
    }

    public function getDividends(int $companyId): Response
    {
        return $this->connector->send(new GetDividends($companyId));
    }

    /**
     * @param  int  $page Page offset to fetch.
     * @param  int  $offset Pad a number of results.
     */
    public function getBulkUploads(int $id, ?int $page, ?int $offset): Response
    {
        return $this->connector->send(new GetBulkUploads($id, $page, $offset));
    }

    /**
     * @param  int  $id The company id
     */
    public function createBulkUpload(int $id): Response
    {
        return $this->connector->send(new CreateBulkUpload($id));
    }

    /**
     * @param  int  $page Page offset to fetch.
     * @param  int  $offset Pad a number of results.
     */
    public function getBulkUpload(int $id, int $bulkUploadId, ?int $page, ?int $offset): Response
    {
        return $this->connector->send(new GetBulkUpload($id, $bulkUploadId, $page, $offset));
    }

    /**
     * @param  string  $bulkUploadId The Bulk upload ID from which detail is associated with
     */
    public function createBulkUploadDetail(string $bulkUploadId, int $companyId): Response
    {
        return $this->connector->send(new CreateBulkUploadDetail($bulkUploadId, $companyId));
    }

    public function getBulkUploadDetailsErrors(int $companyId, int $bulkUploadId): Response
    {
        return $this->connector->send(new GetBulkUploadDetailsErrors($companyId, $bulkUploadId));
    }

    public function getDetailsErrorsGrouped(int $companyId, int $bulkUploadId): Response
    {
        return $this->connector->send(new GetDetailsErrorsGrouped($companyId, $bulkUploadId));
    }

    /**
     * @param  int  $companyId The company id
     * @param  int  $shareholderId The shareholder id
     */
    public function createShareholderAction(int $companyId, int $shareholderId): Response
    {
        return $this->connector->send(new CreateShareholderAction($companyId, $shareholderId));
    }
}
