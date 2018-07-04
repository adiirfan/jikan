<?php
/**
 *    Jikan - MyAnimeList.net Unofficial API v2
 *    Authors - @irfan-dahir, @janvernieuwe, @coderiekelt
 *
 *    This is an unofficial MAL API that stands in for the lackluster features of the official API.
 *    Jikan scrapes and parses the data you request from MAL. No authentication is needed for utilizing this library.
 *
 *    Jikan is NOT affiliated with MyAnimeList.net
 *    This library does not perform any rate limitations, so use it responsibly.
 */

namespace Jikan;

use GuzzleHttp\Client as GuzzleClient;
use Jikan\Model;
use Jikan\MyAnimeList\MalClient;
use Jikan\Request;

/**
 * Class Jikan
 *
 * @package Jikan
 */
class Jikan
{
    /**
     * @var MalClient
     */
    private $myanimelist;

    /**
     * Jikan constructor.
     *
     * @param GuzzleClient|null $guzzle
     */
    public function __construct(GuzzleClient $guzzle = null)
    {
        $this->myanimelist = new MalClient($guzzle);
    }

    /**
     * @param Request\Anime $request
     *
     * @return Model\Anime
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function Anime(Request\Anime $request): Model\Anime
    {
        return $this->myanimelist->getAnime($request);
    }

    /**
     * @param Request\AnimeEpisodes $request
     *
     * @return Model\Episodes
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function AnimeEpisodes(Request\AnimeEpisodes $request): Model\Episodes
    {
        return $this->myanimelist->getAnimeEpisodes($request);
    }

    /**
     * @param Request\AnimeVideos $request
     *
     * @return Model\AnimeVideos
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function AnimeVideos(Request\AnimeVideos $request): Model\AnimeVideos
    {
        return $this->myanimelist->getAnimeVideos($request);
    }

    /**
     * @param Request\Manga $request
     *
     * @return Model\Manga
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function Manga(Request\Manga $request): Model\Manga
    {
        return $this->myanimelist->getManga($request);
    }

    /**
     * @param Request\Character $request
     *
     * @return Model\Character
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function Character(Request\Character $request): Model\Character
    {
        return $this->myanimelist->getCharacter($request);
    }

    /**
     * @param Request\CharactersAndStaff $request
     *
     * @return Model\CharactersAndStaff
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function CharactersAndStaff(Request\CharactersAndStaff $request): Model\CharactersAndStaff
    {
        return $this->myanimelist->getCharactersAndStaff($request);
    }

    /**
     * @param Request\Person $request
     *
     * @return Model\Person
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function Person(Request\Person $request): Model\Person
    {
        return $this->myanimelist->getPerson($request);
    }

    /**
     * @param Request\UserProfile $request
     *
     * @return Model\UserProfile
     * @throws \InvalidArgumentException
     */
    public function UserProfile(Request\UserProfile $request): Model\UserProfile
    {
        return $this->myanimelist->getUserProfile($request);
    }

    /**
     * @param Request\Seasonal $request
     *
     * @return Model\Seasonal
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function Seasonal(Request\Seasonal $request): Model\Seasonal
    {
        return $this->myanimelist->getSeasonal($request);
    }

    /**
     * @param Request\Producer $request
     *
     * @return Model\Producer
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function Producer(Request\Producer $request): Model\Producer
    {
        return $this->myanimelist->getProducer($request);
    }

    /**
     * @param Request\Magazine $request
     *
     * @return Model\Magazine
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function Magazine(Request\Magazine $request): Model\Magazine
    {
        return $this->myanimelist->getMagazine($request);
    }


    /**
     * @param Request\AnimeGenre $request
     *
     * @return Model\AnimeGenre
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function AnimeGenre(Request\AnimeGenre $request): Model\AnimeGenre
    {
        return $this->myanimelist->getAnimeGenre($request);
    }

    /**
     * @param Request\MangaGenre $request
     *
     * @return Model\MangaGenre
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function MangaGenre(Request\MangaGenre $request): Model\MangaGenre
    {
        return $this->myanimelist->getMangaGenre($request);
    }

    /**
     * @param Request\Schedule $request
     *
     * @return Model\Schedule
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function Schedule(Request\Schedule $request): Model\Schedule
    {
        return $this->myanimelist->getSchedule($request);
    }

    /**
     * @param Request\UserFriends $request
     *
     * @return Model\UserFriend[]
     * @throws \InvalidArgumentException
     */
    public function UserFriends(Request\UserFriends $request): array
    {
        return $this->myanimelist->getUserFriends($request);
    }

    /**
     * @param Request\AnimePictures $request
     *
     * @return Model\Picture[]
     */
    public function AnimePictures(Request\AnimePictures $request): array
    {
        return $this->myanimelist->getAnimePictures($request);
    }

    /**
     * @param Request\MangaPictures $request
     *
     * @return Model\Picture[]
     */
    public function MangaPictures(Request\MangaPictures $request): array
    {
        return $this->myanimelist->getMangaPictures($request);
    }

    /**
     * @param Request\PersonPictures $request
     *
     * @return Model\Picture[]
     */
    public function PersonPictures(Request\PersonPictures $request): array
    {
        return $this->myanimelist->getPersonPictures($request);
    }

    /**
     * @param Request\CharacterPictures $request
     *
     * @return Model\Picture[]
     */
    public function CharacterPictures(Request\CharacterPictures $request): array
    {
        return $this->myanimelist->getCharacterPictures($request);
    }

    /**
     * @param Request\News\AnimeNewsListRequest $request
     *
     * @return Model\News\NewsListItem[]
     */
    public function AnimeNewsList(Request\News\AnimeNewsListRequest $request): array
    {
        return $this->myanimelist->getNewsList($request);
    }

    /**
     * @param Request\News\MangaNewsListRequest $request
     *
     * @return Model\News\NewsListItem[]
     */
    public function MangaNewsList(Request\News\MangaNewsListRequest $request): array
    {
        return $this->myanimelist->getNewsList($request);
    }
}
