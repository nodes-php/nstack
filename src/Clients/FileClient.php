<?php

namespace Riide\Services\NStack;

use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class CountryClient
 *
 * @package Riide\Services\NStack
 */
class FileClient extends Client
{
    /**
     * @var string
     */
    protected $slug = 'content/files';

    /**
     * @var CountryClient|null
     */
    private static $instance;

    /**
     * getInstance
     *
     * @author Casper Rasmussen <cr@nodes.dk>
     * @static
     * @access public
     * @return \Riide\Services\NStack\FileClient
     */
    public static function getInstance(): FileClient
    {
        if (!self::$instance) {
            self::$instance = new FileClient();
        }

        return self::$instance;
    }

    /**
     * upload
     *
     * @author Casper Rasmussen <cr@nodes.dk>
     * @access public
     * @param string                                              $privacy
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $uploadedFile
     * @return array
     */
    public function upload(string $privacy, UploadedFile $uploadedFile): array
    {
        $response = $this->getClient()->post($this->getFullUrl(), [
            'multipart' => [
                [
                    'name'     => 'file',
                    'contents' => fopen($uploadedFile->getRealPath(), 'r'),
                    'filename' => $uploadedFile->getRealPath(),
                ],
                [
                    'name'     => 'name',
                    'contents' => str_random(),
                ],
                [
                    'name'     => 'privacy',
                    'contents' => $privacy,
                ],
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);;
    }
}