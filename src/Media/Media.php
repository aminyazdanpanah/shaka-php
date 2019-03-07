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


use Shaka\Options\DASH;
use Shaka\Options\DRM\Encryption;
use Shaka\Options\HLS;

class Media extends ExportMedia implements MediaInterface
{
    /**
     * @param Encryption $drm
     * @return Media
     */
    public function DRM(Encryption $drm)
    {
        $this->drm = $drm;
        return $this;
    }

    /**
     * @param string $output
     * @param callable|null $options
     * @return $this
     */
    public function HLS(string $output, callable $options = null)
    {
        $hls = new HLS();
        $hls = $hls->HLSMasterPlaylistOutput($output);

        if(is_callable($options)) {
            $hls = $options($hls);
        }

        $this->hls = $hls;
        return $this;
    }

    /**
     * @param string $output
     * @param callable|null $options
     * @return $this
     */
    public function DASH(string $output, callable $options = null)
    {
        $dash = new DASH();
        $dash = $dash->mpdOutput($output);

        if(is_callable($options)) {
            $dash = $options($dash);
        }

        $this->dash = $dash;
        return $this;
    }
}