<?php

/**
 * Copyright 2019 Amin Yazdanpanah<http://www.aminyazdanpanah.com>.
 *
 * Licensed under the MIT License;
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      https://opensource.org/licenses/MIT
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


namespace Shaka\Media;


use Shaka\Process\Process;
use Shaka\Streams\StreamInterface;

class DASH extends ExportMedia
{
    /** @var array */
    private $streams = [];

    /**
     * MediaFileAnalysis constructor.
     * @param $process
     */
    public function __construct(Process $process)
    {
        $this->process = $process;
    }

    /**
     * @param StreamInterface $stream
     * @return DASH
     */
    public function addStream(StreamInterface $stream)
    {
        $this->streams[] = $stream;
        return $this;
    }


    /**
     * @return mixed
     */
    public function export()
    {
        $param = func_get_arg(0);
        var_dump($param);
        die;
    }

    /**
     * void
     */
    protected function BuildCommand(): void
    {
        // TODO: Implement BuildCommand() method.
    }
}