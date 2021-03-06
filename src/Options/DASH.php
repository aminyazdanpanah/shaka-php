<?php

/**
 * This file is part of the Shaka-PHP package.
 *
 * (c) Amin Yazdanpanah <contact@aminyazdanpanah.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Shaka\Options;


class DASH extends General
{
    /** @var bool */
    private $generate_static_live_mpd;

    /** @var string */
    private $mpd_output;

    /** @var string */
    private $base_urls;

    /** @var string */
    private $min_buffer_time;

    /** @var string */
    private $minimum_update_period;

    /** @var string */
    private $suggested_presentation_delay;

    /** @var string */
    private $utc_timings;

    /** @var bool */
    private $allow_approximate_segment_timeline;

    /**
     * @return array
     */
    protected function __getGenerateStaticLiveMpd()
    {
        if (!$this->generate_static_live_mpd) {
            return null;
        }

        return [MediaOptions::GENERATE_STATIC_LIVE_MPD];
    }

    /**
     * @param bool $generate_static_live_mpd
     * @return DASH
     */
    public function generateStaticLiveMpd(bool $generate_static_live_mpd = true): DASH
    {
        $this->generate_static_live_mpd = $generate_static_live_mpd;
        return $this;
    }

    /**
     * @return array
     */
    protected function __getBaseUrls()
    {
        if (!$this->base_urls) {
            return null;
        }

        return [MediaOptions::BASE_URLS, $this->base_urls];
    }

    /**
     * @param string $base_urls
     * @return DASH
     */
    public function baseUrls(string $base_urls): DASH
    {
        $this->base_urls = $base_urls;
        return $this;
    }

    /**
     * @return array
     */
    protected function __getMinBufferTime()
    {
        if (!$this->min_buffer_time) {
            return null;
        }

        return [MediaOptions::MIN_BUFFER_TIME, $this->min_buffer_time];
    }

    /**
     * @param string $min_buffer_time
     * @return DASH
     */
    public function minBufferTime(string $min_buffer_time): DASH
    {
        $this->min_buffer_time = $min_buffer_time;
        return $this;
    }

    /**
     * @return array
     */
    protected function __getMinimumUpdatePeriod()
    {
        if (!$this->minimum_update_period) {
            return null;
        }

        return [MediaOptions::MINIMUM_UPDATE_PERIOD, $this->minimum_update_period];
    }

    /**
     * @param string $minimum_update_period
     * @return DASH
     */
    public function minimumUpdatePeriod(string $minimum_update_period): DASH
    {
        $this->minimum_update_period = $minimum_update_period;
        return $this;
    }

    /**
     * @return array
     */
    protected function __getSuggestedPresentationDelay()
    {
        if (!$this->suggested_presentation_delay) {
            return null;
        }

        return [MediaOptions::SUGGESTED_PRESENTATION_DELAY, $this->suggested_presentation_delay];
    }

    /**
     * @param string $suggested_presentation_delay
     * @return DASH
     */
    public function suggestedPresentationDelay(string $suggested_presentation_delay): DASH
    {
        $this->suggested_presentation_delay = $suggested_presentation_delay;
        return $this;
    }

    /**
     * @return array
     */
    protected function __getUtcTimings()
    {
        if (!$this->utc_timings) {
            return null;
        }

        return [MediaOptions::UTC_TIMINGS, $this->utc_timings];
    }

    /**
     * @param string $utc_timings
     * @return DASH
     */
    public function utcTimings(string $utc_timings): DASH
    {
        $this->utc_timings = $utc_timings;
        return $this;
    }

    /**
     * @param string $mpd_output
     * @return DASH
     */
    public function mpdOutput(string $mpd_output): DASH
    {
        $this->mpd_output = $mpd_output;
        return $this;
    }

    /**
     * @return array
     */
    protected function __getMpdOutput()
    {
        if (!$this->mpd_output) {
            return null;
        }

        return [MediaOptions::MPD_OUTPUT, $this->mpd_output];
    }

    /**
     * @param bool $allow_approximate_segment_timeline
     * @return $this
     */
    public function allowApproximateSegmentTimeline(bool $allow_approximate_segment_timeline = true)
    {
        $this->allow_approximate_segment_timeline = $allow_approximate_segment_timeline;
        return $this;
    }

    /**
     * @return array | null
     */
    protected function __getAllowApproximateSegmentTimeline()
    {
        if(!$this->allow_approximate_segment_timeline) {
            return null;
        }

        return [MediaOptions::ALLOW_APPROXIMATE_SEGMENT_TIMELINE];
    }

}