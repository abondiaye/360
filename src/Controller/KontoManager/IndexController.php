<?php declare(strict_types=1);
/**
 * Main controller for KontoManager.
 * @package GenuisPro360°
 * @author Sascha 'SieGeL' Pfalz <webmaster@in-ovation.de>
 * @version 1.0.0 (26-12-2021)
 */

namespace App\Controller\KontoManager;

use App\Entity\AccountBankAccounts;
use App\Entity\AccountCategories;
use App\Entity\AccountData;
use App\Entity\User;
use Doctrine\DBAL\Exception;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
class IndexController extends AbstractController
  {
  /**
   * Renders dashboard
   * @param ManagerRegistry $doctrine
   * @return Response
   * @throws Exception
   */
  #[Route('/kontomanager',name: 'km_index')]
  public function index(ManagerRegistry $doctrine):Response
    {
    /** @var User $user */
    $user = $this->getUser();
    $gehaltId = $doctrine->getRepository(AccountCategories::class)->findOneBy(['Name' => 'Gehalt']);
    if($gehaltId !== null)
      {
      $glist = $doctrine->getRepository(AccountData::class)->GetCategorySumYYYY($user,$gehaltId->getId());
      }
    else
      {
      $glist = [];
      }
    $glabels = $gvalues = [];
    $totgehalt = 0.00;
    foreach($glist as $year => $sum)
      {
      $glabels[]  = $year;
      $gvalues[]  = $sum;
      $totgehalt+=$sum;
      }
    $balance_stats = $doctrine->getRepository(AccountBankAccounts::class)->getCurrentBalance($user);
    return $this->render('kontomanager/index.html.twig',[
      'YEAR'          => date('Y'),
      'YEAR_STATS'    => $doctrine->getRepository(AccountData::class)->GetYearlyStats($user->getId(),(int)date('Y')),
      'ALLTIME_STATS' => $doctrine->getRepository(AccountData::class)->GetYearlyStats($user->getId()),
      'TOTAL_STATS'   => $doctrine->getRepository(AccountData::class)->GetDatabaseStatistics($user),
      'GEHALT_STATS'  => $glist,
      'G_LABELS'      => json_encode($glabels),
      'G_VALUES'      => json_encode($gvalues),
      'TOTAL_GEHALT'  => $totgehalt,
      'BALANCE_STATS' => $balance_stats,
      ]);
    }
  }
