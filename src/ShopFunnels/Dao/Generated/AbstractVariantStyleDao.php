<?php
/*
 * This file has been automatically generated by TDBM.
 * DO NOT edit this file, as it might be overwritten.
 * If you need to perform changes, edit the VariantStyleDao class instead!
 */

declare(strict_types=1);

namespace ShopFunnels\Dao\Generated;

use TheCodingMachine\TDBM\TDBMService;
use TheCodingMachine\TDBM\ResultIterator;
use ShopFunnels\Model\VariantStyle;

/**
 * The AbstractVariantStyleDao class will maintain the persistence of VariantStyle class into the variant_styles table.
 *
 */
class AbstractVariantStyleDao
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
     * Persist the VariantStyle instance.
     *
     * @param VariantStyle $obj The bean to save.
     */
    public function save(VariantStyle $obj): void
    {
        $this->tdbmService->save($obj);
    }

    /**
     * Get all VariantStyle records.
     *
     * @return VariantStyle[]|ResultIterator
     */
    public function findAll() : iterable
    {
        if ($this->defaultSort) {
            $orderBy = 'variant_styles.'.$this->defaultSort.' '.$this->defaultDirection;
        } else {
            $orderBy = null;
        }
        return $this->tdbmService->findObjects('variant_styles', null, [], $orderBy);
    }
    
    /**
     * Get VariantStyle specified by its ID (its primary key)
     * If the primary key does not exist, an exception is thrown.
     *
     * @param int $id
     * @param bool $lazyLoading If set to true, the object will not be loaded right away. Instead, it will be loaded when you first try to access a method of the object.
     * @return VariantStyle
     * @throws TDBMException
     */
    public function getById(int $id, bool $lazyLoading = false) : VariantStyle
    {
        return $this->tdbmService->findObjectByPk('variant_styles', ['id' => $id], [], $lazyLoading);
    }
    
    /**
     * Deletes the VariantStyle passed in parameter.
     *
     * @param VariantStyle $obj object to delete
     * @param bool $cascade if true, it will delete all object linked to $obj
     */
    public function delete(VariantStyle $obj, bool $cascade = false) : void
    {
        if ($cascade === true) {
            $this->tdbmService->deleteCascade($obj);
        } else {
            $this->tdbmService->delete($obj);
        }
    }


    /**
     * Get a list of VariantStyle specified by its filters.
     *
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param mixed[] $parameters The parameters associated with the filter
     * @param mixed $orderBy The order string
     * @param string[] $additionalTablesFetch A list of additional tables to fetch (for performance improvement)
     * @param int|null $mode Either TDBMService::MODE_ARRAY or TDBMService::MODE_CURSOR (for large datasets). Defaults to TDBMService::MODE_ARRAY.
     * @return VariantStyle[]|ResultIterator
     */
    protected function find($filter = null, array $parameters = [], $orderBy=null, array $additionalTablesFetch = [], ?int $mode = null) : iterable
    {
        if ($this->defaultSort && $orderBy == null) {
            $orderBy = 'variant_styles.'.$this->defaultSort.' '.$this->defaultDirection;
        }
        return $this->tdbmService->findObjects('variant_styles', $filter, $parameters, $orderBy, $additionalTablesFetch, $mode);
    }

    /**
     * Get a list of VariantStyle specified by its filters.
     * Unlike the `find` method that guesses the FROM part of the statement, here you can pass the $from part.
     *
     * You should not put an alias on the main table name. So your $from variable should look like:
     *
     *   "variant_styles JOIN ... ON ..."
     *
     * @param string $from The sql from statement
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param mixed[] $parameters The parameters associated with the filter
     * @param mixed $orderBy The order string
     * @param int|null $mode Either TDBMService::MODE_ARRAY or TDBMService::MODE_CURSOR (for large datasets). Defaults to TDBMService::MODE_ARRAY.
     * @return VariantStyle[]|ResultIterator
     */
    protected function findFromSql(string $from, $filter = null, array $parameters = [], $orderBy = null, ?int $mode = null) : iterable
    {
        if ($this->defaultSort && $orderBy == null) {
            $orderBy = 'variant_styles.'.$this->defaultSort.' '.$this->defaultDirection;
        }
        return $this->tdbmService->findObjectsFromSql('variant_styles', $from, $filter, $parameters, $orderBy, $mode);
    }

    /**
     * Get a list of VariantStyle from a SQL query.
     * Unlike the `find` and `findFromSql` methods, here you can pass the whole $sql query.
     *
     * You should not put an alias on the main table name, and select its columns using `*`. So the SELECT part of you $sql should look like:
     *
     *   "SELECT variant_styles.* FROM ..."
     *
     * @param string $sql The sql query
     * @param mixed[] $parameters The parameters associated with the filter
     * @param string|null $countSql The count sql query (automatically computed if not provided)
     * @param int|null $mode Either TDBMService::MODE_ARRAY or TDBMService::MODE_CURSOR (for large datasets). Defaults to TDBMService::MODE_ARRAY.
     * @return VariantStyle[]|ResultIterator
     */
    protected function findFromRawSql(string $sql, array $parameters = [], ?string $countSql = null, ?int $mode = null) : iterable
    {
        return $this->tdbmService->findObjectsFromRawSql('variant_styles', $sql, $parameters, $mode, null, $countSql);
    }

    /**
     * Get a single VariantStyle specified by its filters.
     *
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param mixed[] $parameters The parameters associated with the filter
     * @param string[] $additionalTablesFetch A list of additional tables to fetch (for performance improvement)
     * @return VariantStyle|null
     */
    protected function findOne($filter = null, array $parameters = [], array $additionalTablesFetch = []) : ?VariantStyle
    {
        return $this->tdbmService->findObject('variant_styles', $filter, $parameters, $additionalTablesFetch);
    }

    /**
     * Get a single VariantStyle specified by its filters.
     * Unlike the `find` method that guesses the FROM part of the statement, here you can pass the $from part.
     *
     * You should not put an alias on the main table name. So your $from variable should look like:
     *
     *   "variant_styles JOIN ... ON ..."
     *
     * @param string $from The sql from statement
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param mixed[] $parameters The parameters associated with the filter
     * @return VariantStyle|null
     */
    protected function findOneFromSql(string $from, $filter = null, array $parameters = []) : ?VariantStyle
    {
        return $this->tdbmService->findObjectFromSql('variant_styles', $from, $filter, $parameters);
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