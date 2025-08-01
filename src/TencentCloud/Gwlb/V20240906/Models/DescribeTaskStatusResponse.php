<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskStatus返回参数结构体
 *
 * @method integer getStatus() 获取任务的当前状态。 0：成功，1：失败，2：进行中。
 * @method void setStatus(integer $Status) 设置任务的当前状态。 0：成功，1：失败，2：进行中。
 * @method array getLoadBalancerIds() 获取由负载均衡实例唯一 ID 组成的数组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置由负载均衡实例唯一 ID 组成的数组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取辅助描述信息，如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置辅助描述信息，如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTaskStatusResponse extends AbstractModel
{
    /**
     * @var integer 任务的当前状态。 0：成功，1：失败，2：进行中。
     */
    public $Status;

    /**
     * @var array 由负载均衡实例唯一 ID 组成的数组。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerIds;

    /**
     * @var string 辅助描述信息，如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status 任务的当前状态。 0：成功，1：失败，2：进行中。
     * @param array $LoadBalancerIds 由负载均衡实例唯一 ID 组成的数组。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 辅助描述信息，如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
