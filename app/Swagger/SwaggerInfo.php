<?php

namespace App\Swagger;
use OpenApi\Annotations as OA;


/**
 * @OA\Info(
 *     title="API Documentation",
 *     version="1.0.0",
 *     description="Documentation de l'API pour l'application d'authentification",
 *     @OA\Contact(
 *         email="support@example.com"
 *     )
 * )
 * 
 * @OA\Schema(
 *   schema="User",
 *   type="object",
 *   title="User Model",
 *   required={"id", "name", "email"},
 *   @OA\Property(property="id", type="integer", format="int64"),
 *   @OA\Property(property="name", type="string"),
 *   @OA\Property(property="email", type="string", format="email")
 * )
 *
 * @OA\Parameter(
 *     parameter="UserId",
 *     name="user_id",
 *     in="path",
 *     description="ID de l'utilisateur",
 *     required=true,
 *     @OA\Schema(type="integer", format="int64")
 * )
 *
 * @OA\Parameter(
 *     parameter="PageQuery",
 *     name="page",
 *     in="query",
 *     description="Numéro de la page pour la pagination",
 *     required=false,
 *     @OA\Schema(type="integer", default=1)
 * )
 *
 * @OA\Response(
 *     response="NotFound",
 *     description="Ressource non trouvée",
 *     @OA\JsonContent(
 *         @OA\Property(property="message", type="string", example="Ressource non trouvée")
 *     )
 * )
 *
 * @OA\Response(
 *     response="Unauthorized",
 *     description="Non autorisé",
 *     @OA\JsonContent(
 *         @OA\Property(property="message", type="string", example="Token d'authentification invalide")
 *     )
 * )
 *
 * @OA\SecurityScheme(
 *     securityScheme="BearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 *     description="Utiliser un token JWT dans le header Authorization : Bearer {token}"
 * )
 *
 * @OA\Tag(
 *     name="Users",
 *     description="Opérations liées aux utilisateurs"
 * )
 *
 * @OA\Tag(
 *     name="Auth",
 *     description="Authentification et gestion des tokens"
 * )
 *
 * @OA\Example(
 *     example="UserExample",
 *     summary="Exemple d'utilisateur",
 *     value={
 *         "id": 123,
 *         "name": "Naruto Uzumaki",
 *         "email": "naruto@example.com"
 *     }
 * )
 */
class SwaggerInfo
{
    // Cette classe sert uniquement de conteneur d'annotations Swagger
}
