<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace Google\Site_Kit_Dependencies\Google\Service\Analytics;

class CustomDataSources extends \Google\Site_Kit_Dependencies\Google\Collection
{
    protected $collection_key = 'items';
    protected $itemsType = \Google\Site_Kit_Dependencies\Google\Service\Analytics\CustomDataSource::class;
    protected $itemsDataType = 'array';
    public $itemsPerPage;
    public $kind;
    public $nextLink;
    public $previousLink;
    public $startIndex;
    public $totalResults;
    public $username;
    /**
     * @param CustomDataSource[]
     */
    public function setItems($items)
    {
        $this->items = $items;
    }
    /**
     * @return CustomDataSource[]
     */
    public function getItems()
    {
        return $this->items;
    }
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }
    public function getNextLink()
    {
        return $this->nextLink;
    }
    public function setPreviousLink($previousLink)
    {
        $this->previousLink = $previousLink;
    }
    public function getPreviousLink()
    {
        return $this->previousLink;
    }
    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex()
    {
        return $this->startIndex;
    }
    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }
    public function getTotalResults()
    {
        return $this->totalResults;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function getUsername()
    {
        return $this->username;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\Google\Site_Kit_Dependencies\Google\Service\Analytics\CustomDataSources::class, 'Google\\Site_Kit_Dependencies\\Google_Service_Analytics_CustomDataSources');