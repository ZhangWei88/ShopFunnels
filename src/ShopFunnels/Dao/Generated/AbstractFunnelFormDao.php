<?php
/*
 * This file has been automatically generated by TDBM.
 * DO NOT edit this file, as it might be overwritten.
 * If you need to perform changes, edit the FunnelFormDao class instead!
 */

declare(strict_types=1);

namespace ShopFunnels\Dao\Generated;

use TheCodingMachine\TDBM\TDBMService;
use TheCodingMachine\TDBM\ResultIterator;
use ShopFunnels\Model\FunnelForm;

/**
 * The AbstractFunnelFormDao class will maintain the persistence of FunnelForm class into the funnel_forms table.
 *
 */
class AbstractFunnelFormDao
{

    /**
     * @var TDBMService
     */
    protected $tdbmService;

    /**
     * The default sort column.
     *
     * @var string
     */
    private $defaultSort = null;

    /**
     * The default sort direction.
     *
     * @var string
     */
    private $defaultDirection = 'asc';

    /**
     * Sets the TDBM service used by this DAO.
     *
     * @param TDBMService $tdbmService
     */
    public function __construct(TDBMService $tdbmService)
    {
        $this->tdbmService = $tdbmService;
    }

    /**
     * Persist the FunnelForm instance.
     *
     * @param FunnelForm $obj The bean to save.
     */
    public function save(FunnelForm $obj): void
    {
        $this->tdbmService->save($obj);
    }

    /**
     * Get all FunnelForm records.
     *
     * @return FunnelForm[]|ResultIterator
     */
    public function findAll() : iterable
    {
        if ($this->defaultSort) {
            $orderBy = 'funnel_forms.'.$this->defaultSort.' '.$this->defaultDirection;
        } else {
            $orderBy = null;
        }
        return $this->tdbmService->findObjects('funnel_forms', null, [], $orderBy);
    }
    
    /**
     * Get FunnelForm specified by its ID (its primary key)
     * If the primary key does not exist, an exception is thrown.
     *
     * @param int $id
     * @param bool $lazyLoading If set to true, the object will not be loaded right away. Instead, it will be loaded when you first try to access a method of the object.
     * @return FunnelForm
     * @throws TDBMException
     */
    public function getById(int $id, bool $lazyLoading = false) : FunnelForm
    {
        return $this->tdbmService->findObjectByPk('funnel_forms', ['id' => $id], [], $lazyLoading);
    }
    
    /**
     * Deletes the FunnelForm passed in parameter.
     *
     * @param FunnelForm $obj object to delete
     * @param bool $cascade if true, it will delete all object linked to $obj
     */
    public function delete(FunnelForm $obj, bool $cascade = false) : void
    {
        if ($cascade === true) {
            $this->tdbmService->deleteCascade($obj);
        } else {
            $this->tdbmService->delete($obj);
        }
    }


    /**
     * Get a list of FunnelForm specified by its filters.
     *
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param mixed[] $parameters The parameters associated with the filter
     * @param mixed $orderBy The order string
     * @param string[] $additionalTablesFetch A list of additional tables to fetch (for performance improvement)
     * @param int|null $mode Either TDBMService::MODE_ARRAY or TDBMService::MODE_CURSOR (for large datasets). Defaults to TDBMService::MODE_ARRAY.
     * @return FunnelForm[]|ResultIterator
     */
    protected function find($filter = null, array $parameters = [], $orderBy=null, array $additionalTablesFetch = [], ?int $mode = null) : iterable
    {
        if ($this->defaultSort && $orderBy == null) {
            $orderBy = 'funnel_forms.'.$this->defaultSort.' '.$this->defaultDirection;
        }
        return $this->tdbmService->findObjects('funnel_forms', $filter, $parameters, $orderBy, $additionalTablesFetch, $mode);
    }

    /**
     * Get a list of FunnelForm specified by its filters.
     * Unlike the `find` method that guesses the FROM part of the statement, here you can pass the $from part.
     *
     * You should not put an alias on the main table name. So your $from variable should look like:
     *
     *   "funnel_forms JOIN ... ON ..."
     *
     * @param string $from The sql from statement
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param mixed[] $parameters The parameters associated with the filter
     * @param mixed $orderBy The order string
     * @param int|null $mode Either TDBMService::MODE_ARRAY or TDBMService::MODE_CURSOR (for large datasets). Defaults to TDBMService::MODE_ARRAY.
     * @return FunnelForm[]|ResultIterator
     */
    protected function findFromSql(string $from, $filter = null, array $parameters = [], $orderBy = null, ?int $mode = null) : iterable
    {
        if ($this->defaultSort && $orderBy == null) {
            $orderBy = 'funnel_forms.'.$this->defaultSort.' '.$this->defaultDirection;
        }
        return $this->tdbmService->findObjectsFromSql('funnel_forms', $from, $filter, $parameters, $orderBy, $mode);
    }

    /**
     * Get a list of FunnelForm from a SQL query.
     * Unlike the `find` and `findFromSql` methods, here you can pass the whole $sql query.
     *
     * You should not put an alias on the main table name, and select its columns using `*`. So the SELECT part of you $sql should look like:
     *
     *   "SELECT funnel_forms.* FROM ..."
     *
     * @param string $sql The sql query
     * @param mixed[] $parameters The parameters associated with the filter
     * @param string|null $countSql The count sql query (automatically computed if not provided)
     * @param int|null $mode Either TDBMService::MODE_ARRAY or TDBMService::MODE_CURSOR (for large datasets). Defaults to TDBMService::MODE_ARRAY.
     * @return FunnelForm[]|ResultIterator
     */
    protected function findFromRawSql(string $sql, array $parameters = [], ?string $countSql = null, ?int $mode = null) : iterable
    {
        return $this->tdbmService->findObjectsFromRawSql('funnel_forms', $sql, $parameters, $mode, null, $countSql);
    }

    /**
     * Get a single FunnelForm specified by its filters.
     *
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param mixed[] $parameters The parameters associated with the filter
     * @param string[] $additionalTablesFetch A list of additional tables to fetch (for performance improvement)
     * @return FunnelForm|null
     */
    protected function findOne($filter = null, array $parameters = [], array $additionalTablesFetch = []) : ?FunnelForm
    {
        return $this->tdbmService->findObject('funnel_forms', $filter, $parameters, $additionalTablesFetch);
    }

    /**
     * Get a single FunnelForm specified by its filters.
     * Unlike the `find` method that guesses the FROM part of the statement, here you can pass the $from part.
     *
     * You should not put an alias on the main table name. So your $from variable should look like:
     *
     *   "funnel_forms JOIN ... ON ..."
     *
     * @param string $from The sql from statement
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param mixed[] $parameters The parameters associated with the filter
     * @return FunnelForm|null
     */
    protected function findOneFromSql(string $from, $filter = null, array $parameters = []) : ?FunnelForm
    {
        return $this->tdbmService->findObjectFromSql('funnel_forms', $from, $filter, $parameters);
    }

    /**
     * Sets the default column for default sorting.
     *
     * @param string $defaultSort
     */
    public function setDefaultSort(string $defaultSort) : void
    {
        $this->defaultSort = $defaultSort;
    }
}