<?php
declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\NumericSequences\ListNumericSequences;

use Symfony\Component\HttpFoundation\Request;
use DobryProgramator\iDoklad\UseCase\UseCaseRequestInterface;

final class ListNumericSequencesRequest implements UseCaseRequestInterface
{
    private const HTTP_METHOD = Request::METHOD_GET;

    private const ENDPOINT = 'NumericSequences';

    private const RESPONSE_CLASS = ListNumericSequencesResponse::class;

    private const FILTER = 'Id';
    private const FILTER_TYPE = 'and';
    private const SORT = 'Id';
    private const PAGE = 1;
    private const PAGE_SIZE = 1;

    private string $filter;
    private string $filtertype;
    private string $sort;
    private int $page;
    private int $pagesize;

    public function __construct()
    {
        $this->filter = self::FILTER;
        $this->filtertype = self::FILTER_TYPE;
        $this->sort = self::SORT;
        $this->page = self::PAGE;
        $this->pagesize = self::PAGE_SIZE;
    }

    /**
     * @return array<string, string>
     */
    public function __toArray(): array
    {
        return [
            'filter' => $this->filter,
            'filtertype' => $this->filtertype,
            'sort' => $this->sort,
            'page' => $this->page,
            'pagesize' => $this->pagesize,
        ];
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD;
    }

    public function getEndpoint(): string
    {
        return self::ENDPOINT;
    }

    /**
     * @return class-string<CreateContactResponse>
     */
    public function getResponseObjectClass(): string
    {
        return self::RESPONSE_CLASS;
    }
}
