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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method boolean getIsScaleDownEnabled() 获取是否开启缩容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsScaleDownEnabled(boolean $IsScaleDownEnabled) 设置是否开启缩容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpander() 获取多伸缩组情况下扩容选择算法(random 随机选择，most-pods 最多类型的Pod least-waste 最少的资源浪费，默认为random)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpander(string $Expander) 设置多伸缩组情况下扩容选择算法(random 随机选择，most-pods 最多类型的Pod least-waste 最少的资源浪费，默认为random)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxEmptyBulkDelete() 获取最大并发缩容数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxEmptyBulkDelete(integer $MaxEmptyBulkDelete) 设置最大并发缩容数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScaleDownDelay() 获取集群扩容后多少分钟开始判断缩容（默认为10分钟）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleDownDelay(integer $ScaleDownDelay) 设置集群扩容后多少分钟开始判断缩容（默认为10分钟）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScaleDownUnneededTime() 获取节点连续空闲多少分钟后被缩容（默认为 10分钟）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleDownUnneededTime(integer $ScaleDownUnneededTime) 设置节点连续空闲多少分钟后被缩容（默认为 10分钟）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScaleDownUtilizationThreshold() 获取节点资源使用量低于多少(百分比)时认为空闲(默认: 50(百分比))
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleDownUtilizationThreshold(integer $ScaleDownUtilizationThreshold) 设置节点资源使用量低于多少(百分比)时认为空闲(默认: 50(百分比))
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSkipNodesWithLocalStorage() 获取含有本地存储Pod的节点是否不缩容(默认： FALSE)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkipNodesWithLocalStorage(boolean $SkipNodesWithLocalStorage) 设置含有本地存储Pod的节点是否不缩容(默认： FALSE)
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSkipNodesWithSystemPods() 获取含有kube-system namespace下非DaemonSet管理的Pod的节点是否不缩容 (默认： FALSE)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkipNodesWithSystemPods(boolean $SkipNodesWithSystemPods) 设置含有kube-system namespace下非DaemonSet管理的Pod的节点是否不缩容 (默认： FALSE)
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIgnoreDaemonSetsUtilization() 获取计算资源使用量时是否默认忽略DaemonSet的实例(默认值: False，不忽略)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIgnoreDaemonSetsUtilization(boolean $IgnoreDaemonSetsUtilization) 设置计算资源使用量时是否默认忽略DaemonSet的实例(默认值: False，不忽略)
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *集群弹性伸缩配置
 */
class ClusterAsGroupOption extends AbstractModel
{
    /**
     * @var boolean 是否开启缩容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsScaleDownEnabled;

    /**
     * @var string 多伸缩组情况下扩容选择算法(random 随机选择，most-pods 最多类型的Pod least-waste 最少的资源浪费，默认为random)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Expander;

    /**
     * @var integer 最大并发缩容数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxEmptyBulkDelete;

    /**
     * @var integer 集群扩容后多少分钟开始判断缩容（默认为10分钟）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleDownDelay;

    /**
     * @var integer 节点连续空闲多少分钟后被缩容（默认为 10分钟）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleDownUnneededTime;

    /**
     * @var integer 节点资源使用量低于多少(百分比)时认为空闲(默认: 50(百分比))
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleDownUtilizationThreshold;

    /**
     * @var boolean 含有本地存储Pod的节点是否不缩容(默认： FALSE)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkipNodesWithLocalStorage;

    /**
     * @var boolean 含有kube-system namespace下非DaemonSet管理的Pod的节点是否不缩容 (默认： FALSE)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkipNodesWithSystemPods;

    /**
     * @var boolean 计算资源使用量时是否默认忽略DaemonSet的实例(默认值: False，不忽略)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IgnoreDaemonSetsUtilization;
    /**
     * @param boolean $IsScaleDownEnabled 是否开启缩容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Expander 多伸缩组情况下扩容选择算法(random 随机选择，most-pods 最多类型的Pod least-waste 最少的资源浪费，默认为random)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxEmptyBulkDelete 最大并发缩容数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScaleDownDelay 集群扩容后多少分钟开始判断缩容（默认为10分钟）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScaleDownUnneededTime 节点连续空闲多少分钟后被缩容（默认为 10分钟）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScaleDownUtilizationThreshold 节点资源使用量低于多少(百分比)时认为空闲(默认: 50(百分比))
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SkipNodesWithLocalStorage 含有本地存储Pod的节点是否不缩容(默认： FALSE)
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SkipNodesWithSystemPods 含有kube-system namespace下非DaemonSet管理的Pod的节点是否不缩容 (默认： FALSE)
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IgnoreDaemonSetsUtilization 计算资源使用量时是否默认忽略DaemonSet的实例(默认值: False，不忽略)
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("IsScaleDownEnabled",$param) and $param["IsScaleDownEnabled"] !== null) {
            $this->IsScaleDownEnabled = $param["IsScaleDownEnabled"];
        }

        if (array_key_exists("Expander",$param) and $param["Expander"] !== null) {
            $this->Expander = $param["Expander"];
        }

        if (array_key_exists("MaxEmptyBulkDelete",$param) and $param["MaxEmptyBulkDelete"] !== null) {
            $this->MaxEmptyBulkDelete = $param["MaxEmptyBulkDelete"];
        }

        if (array_key_exists("ScaleDownDelay",$param) and $param["ScaleDownDelay"] !== null) {
            $this->ScaleDownDelay = $param["ScaleDownDelay"];
        }

        if (array_key_exists("ScaleDownUnneededTime",$param) and $param["ScaleDownUnneededTime"] !== null) {
            $this->ScaleDownUnneededTime = $param["ScaleDownUnneededTime"];
        }

        if (array_key_exists("ScaleDownUtilizationThreshold",$param) and $param["ScaleDownUtilizationThreshold"] !== null) {
            $this->ScaleDownUtilizationThreshold = $param["ScaleDownUtilizationThreshold"];
        }

        if (array_key_exists("SkipNodesWithLocalStorage",$param) and $param["SkipNodesWithLocalStorage"] !== null) {
            $this->SkipNodesWithLocalStorage = $param["SkipNodesWithLocalStorage"];
        }

        if (array_key_exists("SkipNodesWithSystemPods",$param) and $param["SkipNodesWithSystemPods"] !== null) {
            $this->SkipNodesWithSystemPods = $param["SkipNodesWithSystemPods"];
        }

        if (array_key_exists("IgnoreDaemonSetsUtilization",$param) and $param["IgnoreDaemonSetsUtilization"] !== null) {
            $this->IgnoreDaemonSetsUtilization = $param["IgnoreDaemonSetsUtilization"];
        }
    }
}
