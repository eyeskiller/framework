<?php

namespace Shopsys\FrameworkBundle\Twig;

use Shopsys\FrameworkBundle\Component\Domain\Domain;
use Shopsys\FrameworkBundle\Component\UploadedFile\UploadedFile;
use Shopsys\FrameworkBundle\Component\UploadedFile\UploadedFileFacade;
use Shopsys\FrameworkBundle\Twig\FileThumbnail\FileThumbnailExtension;
use Twig_Extension;
use Twig_SimpleFunction;

class UploadedFileExtension extends Twig_Extension
{
    /**
     * @var \Shopsys\FrameworkBundle\Component\Domain\Domain
     */
    protected $domain;

    /**
     * @var \Shopsys\FrameworkBundle\Component\UploadedFile\UploadedFileFacade
     */
    protected $uploadedFileFacade;

    /**
     * @var \Shopsys\FrameworkBundle\Twig\FileThumbnail\FileThumbnailExtension
     */
    protected $fileThumbnailExtension;

    /**
     * @param \Shopsys\FrameworkBundle\Component\Domain\Domain $domain
     * @param \Shopsys\FrameworkBundle\Component\UploadedFile\UploadedFileFacade $uploadedFileFacade
     * @param \Shopsys\FrameworkBundle\Twig\FileThumbnail\FileThumbnailExtension $fileThumbnailExtension
     */
    public function __construct(
        Domain $domain,
        UploadedFileFacade $uploadedFileFacade,
        FileThumbnailExtension $fileThumbnailExtension
    ) {
        $this->domain = $domain;
        $this->uploadedFileFacade = $uploadedFileFacade;
        $this->fileThumbnailExtension = $fileThumbnailExtension;
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return [
            new Twig_SimpleFunction('uploadedFileUrl', [$this, 'getUploadedFileUrl']),
            new Twig_SimpleFunction('uploadedFilePreview', [$this, 'getUploadedFilePreviewHtml'], ['is_safe' => ['html']]),
        ];
    }

    /**
     * @param \Shopsys\FrameworkBundle\Component\UploadedFile\UploadedFile $uploadedFile
     * @return string
     */
    public function getUploadedFileUrl(UploadedFile $uploadedFile)
    {
        return $this->uploadedFileFacade->getUploadedFileUrl($this->domain->getCurrentDomainConfig(), $uploadedFile);
    }

    /**
     * @param \Shopsys\FrameworkBundle\Component\UploadedFile\UploadedFile $uploadedFile
     * @return string
     */
    public function getUploadedFilePreviewHtml(UploadedFile $uploadedFile)
    {
        $filepath = $this->uploadedFileFacade->getAbsoluteUploadedFileFilepath($uploadedFile);
        $fileThumbnailInfo = $this->fileThumbnailExtension->getFileThumbnailInfo($filepath);

        if ($fileThumbnailInfo->getIconType() !== null) {
            $classes = [
                'svg',
                'svg-file-' . $fileThumbnailInfo->getIconType(),
                'list-files__item__file__type',
                'list-files__item__file__type--' . $fileThumbnailInfo->getIconType(),
                'text-no-decoration',
                'cursor-pointer',
            ];

            return '<i class="' . implode(' ', $classes) . '"></i>';
        } else {
            return '<img src="' . $fileThumbnailInfo->getImageUri() . '"/>';
        }
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'file_extension';
    }
}
