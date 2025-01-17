<?php

/**
 * @file
 * Contains \cweagans\Composer\Resolvers\ResolverInterface.
 */

namespace cweagans\Composer\Downloader;

use Composer\Composer;
use Composer\IO\IOInterface;
use cweagans\Composer\Patch;

interface DownloaderInterface
{
    /**
     * DownloaderInterface constructor.
     *
     * @param Composer $composer
     *   The current composer object from the main plugin. Used to locate/read
     *   package metadata and configuration.
     * @param IOInterface $io
     *   IO object to use for resolver input/output.
     */
    public function __construct(Composer $composer, IOInterface $io);

    /**
     * Apply a patch.
     *
     * This method sets Patch->localPath to wherever the patch was downloaded to.
     *
     * @param Patch $patch
     *   The patch to apply.
     */
    public function download(Patch $patch): void;
}
