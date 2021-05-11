<?php
declare(strict_types=1);

namespace Fooman\EmailAttachments\Model;

/**
 * @copyright  Copyright (c) 2015 Fooman Limited (http://www.fooman.co.nz)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class AttachmentContainer implements Api\AttachmentContainerInterface
{
    private $attachments = [];

    /**
     * @return bool
     */
    public function hasAttachments()
    {
        return !empty($this->attachments);
    }

    /**
     * @param Api\AttachmentInterface $attachment
     */
    public function addAttachment(Api\AttachmentInterface $attachment)
    {
        $this->attachments[] = $attachment;
    }

    /**
     * @return array
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @return void
     */
    public function resetAttachments()
    {
        $this->attachments = [];
    }
}
