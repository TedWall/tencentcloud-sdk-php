<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getLimit() 获取实例列表大小
 * @method void setLimit(integer $Limit) 设置实例列表大小
 * @method integer getOffset() 获取偏移量，取Limit整数倍
 * @method void setOffset(integer $Offset) 设置偏移量，取Limit整数倍
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getOrderBy() 获取枚举范围： projectId,createtime,instancename,type,curDeadline
 * @method void setOrderBy(string $OrderBy) 设置枚举范围： projectId,createtime,instancename,type,curDeadline
 * @method integer getOrderType() 获取1倒序，0顺序，默认倒序
 * @method void setOrderType(integer $OrderType) 设置1倒序，0顺序，默认倒序
 * @method array getVpcIds() 获取私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络
 * @method void setVpcIds(array $VpcIds) 设置私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络
 * @method array getSubnetIds() 获取子网ID数组，数组下标从0开始
 * @method void setSubnetIds(array $SubnetIds) 设置子网ID数组，数组下标从0开始
 * @method array getProjectIds() 获取项目ID 组成的数组，数组下标从0开始
 * @method void setProjectIds(array $ProjectIds) 设置项目ID 组成的数组，数组下标从0开始
 * @method string getSearchKey() 获取查找实例的ID。
 * @method void setSearchKey(string $SearchKey) 设置查找实例的ID。
 * @method array getRegionIds() 获取查询的Region的列表。
 * @method void setRegionIds(array $RegionIds) 设置查询的Region的列表。
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 */

/**
 *DescribeInstances请求参数结构体
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var integer 实例列表大小
     */
    public $Limit;

    /**
     * @var integer 偏移量，取Limit整数倍
     */
    public $Offset;

    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string 枚举范围： projectId,createtime,instancename,type,curDeadline
     */
    public $OrderBy;

    /**
     * @var integer 1倒序，0顺序，默认倒序
     */
    public $OrderType;

    /**
     * @var array 私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络
     */
    public $VpcIds;

    /**
     * @var array 子网ID数组，数组下标从0开始
     */
    public $SubnetIds;

    /**
     * @var array 项目ID 组成的数组，数组下标从0开始
     */
    public $ProjectIds;

    /**
     * @var string 查找实例的ID。
     */
    public $SearchKey;

    /**
     * @var array 查询的Region的列表。
     */
    public $RegionIds;

    /**
     * @var string 实例名称
     */
    public $InstanceName;
    /**
     * @param integer $Limit 实例列表大小
     * @param integer $Offset 偏移量，取Limit整数倍
     * @param string $InstanceId 实例Id
     * @param string $OrderBy 枚举范围： projectId,createtime,instancename,type,curDeadline
     * @param integer $OrderType 1倒序，0顺序，默认倒序
     * @param array $VpcIds 私有网络ID数组，数组下标从0开始，如果不传则默认选择基础网络
     * @param array $SubnetIds 子网ID数组，数组下标从0开始
     * @param array $ProjectIds 项目ID 组成的数组，数组下标从0开始
     * @param string $SearchKey 查找实例的ID。
     * @param array $RegionIds 查询的Region的列表。
     * @param string $InstanceName 实例名称
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("RegionIds",$param) and $param["RegionIds"] !== null) {
            $this->RegionIds = $param["RegionIds"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}