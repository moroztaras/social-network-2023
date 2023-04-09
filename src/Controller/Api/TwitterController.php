<?php

namespace App\Controller\Api;

use App\Entity\Twitter;
use App\Exception\Api\BadRequestJsonHttpException;
use App\Manager\TwitterManager;
use Ramsey\Uuid\Uuid;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TwitterController.
 */
#[Route('api/twitter', name: 'api_twitter')]
class TwitterController extends ApiController
{
    public function __construct(
        private TwitterManager $twitterManager,
    ) {
    }

    #[Route('', name: 'api_twitter_create', methods: 'POST')]
    public function create(Request $request): JsonResponse
    {
        $user = $this->getCurrentUser($request);

        if (!($content = $request->getContent())) {
            throw new BadRequestJsonHttpException('Bad Request.');
        }

        return $this->json(['twitter' => $this->twitterManager->new($content, $user)], Response::HTTP_OK);
    }

   #[Route('/{uuid}', name: 'api_twitter_update', requirements: ['uuid' => Uuid::VALID_PATTERN], methods: 'PUT')]
    public function update(Request $request, Twitter $twitter): JsonResponse
    {
        $this->getCurrentUser($request);

        if (!($content = $request->getContent())) {
            throw new BadRequestJsonHttpException('Bad Request.');
        }

        return $this->json([
            'twitter' => $this->twitterManager->edit($content, $twitter)],
            Response::HTTP_OK
        );
    }
}