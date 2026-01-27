<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
   {
   
  protected $table = 'payment';
	 
//GENERAL

public function getAdminByEmail($email)
    {
        $query = $this->db->table('admin')
                         ->where('email', $email)
                         ->get();

        if ($query->getNumRows() > 0) {
            return $query->getResultArray();
        } else {
            return [];
        }
    }

public function matchAllStartup($PrimaryBusinessIndustry, $CurrentInvestmentStage, $Startup_Implementation_Stage, $CountryHQ, $Next_Funding_Round_Target_Sought)
    {
        $builder = $this->db->table('Startups_Inv')
            ->where('Next_Funding_Round_Target_Sought >=', $Next_Funding_Round_Target_Sought);

        if (!empty($CurrentInvestmentStage)) {
            $builder->like('CurrentInvestmentStage', $CurrentInvestmentStage, 'both');
        }

        if (!empty($Startup_Implementation_Stage)) {
            $builder->like('Startup_Implementation_Stage', $Startup_Implementation_Stage, 'both');
        }

        if (!empty($CountryHQ)) {
            $builder->like('CountryHQ', $CountryHQ, 'both');
        }

        if (!empty($PrimaryBusinessIndustry)) {
            $builder->groupStart();
            foreach ($PrimaryBusinessIndustry as $key => $industry) {
                if ($key === 0) {
                    $builder->like('PrimaryBusinessIndustry', $industry, 'both');
                } else {
                    $builder->orLike('PrimaryBusinessIndustry', $industry, 'both');
                }
            }
            $builder->groupEnd();
        }

        $query = $builder->get();
        $countRows = $query->getNumRows();

        if ($countRows > 0) {
            return $query->getResultArray();
        } else {
            return [];
        }
        
    }
public function matchStartupDefault($primaryBusinessIndustry, $currentInvestmentStage, $startupImplementationStage, $countryHQ, $nextFundingRoundTargetSought)
{
    return $this->table('Startups_Inv')
        ->where("Next_Funding_Round_Target_Sought >=", $nextFundingRoundTargetSought)
        ->groupStart()
            ->like("PrimaryBusinessIndustry", $primaryBusinessIndustry, 'both', '!', true)
            ->orLike("CurrentInvestmentStage", $currentInvestmentStage, 'both', '!', true)
            ->orLike("Startup_Implementation_Stage", $startupImplementationStage, 'both', '!', true)
            ->orLike("CountryHQ", $countryHQ, 'both', '!', true)
        ->groupEnd()
        ->get()
        ->getResultArray();
}


public function countMatchStartupDefault($primaryBusinessIndustry, $currentInvestmentStage, $startupImplementationStage, $countryHQ, $nextFundingRoundTargetSought)
{
    $builder = $this->table('Startups_Inv')
        ->like('PrimaryBusinessIndustry', $primaryBusinessIndustry, 'both', '!', true)
        ->orLike('CountryHQ', $countryHQ, 'both', '!', true)
        ->orLike('Startup_Implementation_Stage', $startupImplementationStage, 'both', '!', true)
        ->orLike('CurrentInvestmentStage', $currentInvestmentStage, 'both', '!', true)
        ->where('Next_Funding_Round_Target_Sought >=', $nextFundingRoundTargetSought);

    $query = $builder->get();
    return $query->getNumRows();
}

public function getAllJobsBySearch($searchJobs)
{
    $builder = $this->db->table('candidate')
        ->like('country', $searchJobs, 'both')
        ->orLike('industry', $searchJobs, 'both');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function applyCSRByEmail($email, $csr_id)
{
    $builder = $this->db->table('csr_apply')
        ->where('email', $email)
        ->where('csr_id', $csr_id);

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function applyEventCheck($event_id)
{
    $builder = $this->db->table('wp_event')
        ->where('id', $event_id);

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function applyEventAttendeeById($event_id, $email)
{
    $builder = $this->db->table('wp_event')
        ->where('wp_id', $event_id)
        ->where('email', $email);

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function applyEventAttendee($event_id, $id)
{
    $builder = $this->db->table('wp_event')
        ->where('wp_id', $event_id)
        ->where('id', $id);

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function applyEventRand($event_id)
{
    $builder = $this->db->table('wp_event')
        ->where('wp_id', $event_id)
        ->orderBy('RAND()');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function applyEvent($event_id)
{
    $builder = $this->db->table('wp_event')
        ->where('wp_id', $event_id);

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function applyCSR($csr_id)
{
    $builder = $this->db->table('csr_apply')
        ->where('csr_id', $csr_id);

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}



public function applyCandidate($job_id)
{
    $builder = $this->db->table('candidate')
        ->where('job_id', $job_id);

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function matchCandidate($country, $industry)
{
    $builder = $this->db->table('candidate')
        ->like('country', $country, 'both')
        ->orLike('industry', $industry, 'both');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function countAllConnectionsByAdmin()
{	
    $query = $this->db->table('all_connections')->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
			
}

public function countAllConnections($email)
{
    return $this->db->table('all_connections')
        ->where('email', $email)
        ->countAllResults();
}

public function countAllJobs()
{
    return $this->db->table('jobpost')
        ->countAllResults();
}

public function countMatchCandidateApp($country, $industry)
{
    $builder = $this->db->table('candidate')
        ->like('country', $country, 'both')
        ->orLike('industry', $industry, 'both');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    return $count_row;
}


public function countCorperateCrs($email)
{
    $builder = $this->db->table('csr')
        ->where('email', $email);

    $query = $builder->get();
    $count_row = $query->getNumRows();

    return $count_row;
}

public function StoryPostByStartup($ref)
{
    $builder = $this->db->table('story')
        ->where('ref', $ref);

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function connectStartupsMentors($ref)
{
    $builder = $this->db->table('all_connections')
        ->where('ref', $ref)
        ->where('connection', 'startup-mentor');
    // You can uncomment the following line if you want to include 'mentor-startup' as well.
    // ->orWhere('connection', 'mentor-startup');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function connectionType($ref, $connect)
{
    $builder = $this->db->table('all_connections')
        ->where('ref', $ref)
        ->where('connection', $connect);
    // You can uncomment the following line if you want to include 'mentor-startup' connections as well.
    // ->orWhere('connection', 'mentor-startup');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function connectStartupsInvestors($ref)
{
    $builder = $this->db->table('all_connections')
        ->where('ref', $ref)
        ->where('connection', 'startup-investor');
    // You can uncomment the following line if you want to include other types of connections as well.
    // ->orWhere('connection', 'other-connection');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function getAllInvestorByEmail($email)
{
    $builder = $this->db->table('investor')
        ->where('Contact_Email', $email);

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function countStoryPostByStartup($ref)
{
    $builder = $this->db->table('story')
        ->where('ref', $ref);
    // You can uncomment the following line if you want to include additional conditions.
    // ->orWhere('connection', 'mentor-startup');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    return $count_row;
}

public function countPartner($ref)
{
    $builder = $this->db->table('pms_ref_link')
        ->where('ref', $ref);
        //->where('connection', $connect);
    
    $query = $builder->get();
    $count_row = $query->getNumRows();

    return $count_row;
}

public function countConnectionType($ref, $connect)
{
    $builder = $this->db->table('all_connections')
        ->where('ref', $ref)
        ->where('connection', $connect);
    // You can uncomment the following line if you want to include additional conditions.
    // ->orWhere('connection', 'mentor-startup');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    return $count_row;
}

public function countConnectStartupsMentors($ref)
{
    $builder = $this->db->table('all_connections')
        ->where('ref', $ref)
        ->where('connection', 'startup-mentor');
    // You can uncomment the following line if you want to include 'mentor-startup' connections as well.
    // ->orWhere('connection', 'mentor-startup');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    return $count_row;
}

public function countCohort($Company)
{
    $builder = $this->db->table('Cohort')
        ->where('Company', $Company);

    $query = $builder->get();
    $count_row = $query->getNumRows();

    return $count_row;
}

public function countInvestorConnection($email)
{
    $builder = $this->db->table('all_connections')
        ->where('email', $email);

    $query = $builder->get();
    $count_row = $query->getNumRows();

    return $count_row;
}

public function countConnectStartupsInvestors($ref)
{
    $builder = $this->db->table('all_connections')
        ->where('ref', $ref)
        ->where('connection', 'startup-investor');
    // You can uncomment the following line if you want to include 'investor-startup' connections as well.
    // ->orWhere('connection', 'investor-startup');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    return $count_row;
}

public function countMatchCorperateMentor($Industry_Focus)
{
    $builder = $this->db->table('mentor_info')
        ->like('Industry', 'Any', 'both')
        ->orLike('Industry', $Industry_Focus, 'both');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0 && !empty($Industry_Focus)) {
        return $count_row;
    } else {
        return 0;
    }
}


public function MatchCorperatePartners($Industry_Focus)
{
    $builder = $this->db->table('cooperate_info')
        ->orLike('Corporate_industry', $Industry_Focus, 'both');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0 && !empty($Industry_Focus)) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function countMatchCorperatePartner($Industry_Focus, $Email)
{
    $builder = $this->db->table('cooperate_info')
        ->where('Need_contact_email !=', $Email)
        ->orLike('Corporate_industry', $Industry_Focus, 'both');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0 && !empty($Industry_Focus)) {
        return $count_row;
    } else {
        return 0;
    }
}

public function MatchCorperateMentor($Industry_Focus)
{
    $builder = $this->db->table('mentor_info')
        ->orLike('Industry', $Industry_Focus, 'both');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0 && !empty($Industry_Focus)) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function countMatchCorperateInvestor($Industry_Focus)
{
    $builder = $this->db->table('investor')
        ->like('Industry_Focus', 'open to all sectors', 'both')
        ->orLike('Industry_Focus', $Industry_Focus, 'both');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0 && !empty($Industry_Focus)) {
        return $count_row;
    } else {
        return 0;
    }
}

public function MatchCorperateInvestor($Industry_Focus)
{
    $builder = $this->db->table('investor')
        ->groupStart()
            ->like('Industry_Focus', 'open to all sectors', 'both')
            ->orLike('Industry_Focus', $Industry_Focus ?? '', 'both')
        ->groupEnd();

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0 && !empty($Industry_Focus)) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function MatchInvestorDefault($Industry_Focus, $Investment_Stage_Focus, $Implementation_Stage_Focus, $Min_Cheque, $Regional_focus)
{
    $min = 0;
    $Regionx = $this->getRegionByCountry($Regional_focus)[0]['region'];

    $builder = $this->db->table('investor')
        ->where("Min_Cheque BETWEEN '$min' AND '$Min_Cheque'")
        ->orLike('Industry_Focus', $Industry_Focus, 'both')
        ->orLike('Investment_Stage_Focus', $Investment_Stage_Focus, 'both')
        ->orLike('Implementation_Stage_Focus', $Implementation_Stage_Focus, 'both')
        ->orLike('Regional_focus', $Regionx, 'both');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function MatchInvestorDefaultLimit($Industry_Focus, $Investment_Stage_Focus, $Implementation_Stage_Focus, $Min_Cheque, $Regional_focus)
{
    $min = 0;
    $Regionx = $this->getRegionByCountry($Regional_focus)[0]['region'];

    $builder = $this->db->table('investor')
        ->where("Min_Cheque BETWEEN '$min' AND '$Min_Cheque'")
        ->orLike('Industry_Focus', 'open to all sectors' ?? '', 'both')
        ->orLike('Industry_Focus', $Industry_Focus ?? '', 'both')
        ->orLike('Investment_Stage_Focus', $Investment_Stage_Focus ?? '', 'both')
        ->orLike('Implementation_Stage_Focus', $Implementation_Stage_Focus ?? '', 'both')
        ->orLike('Regional_focus', $Regionx ?? '', 'both');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0 && $Industry_Focus != '') {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function MatchInvestorDefaultLimitByOne($Industry_Focus, $Investment_Stage_Focus, $Implementation_Stage_Focus, $Min_Cheque, $Regional_focus)
{
    $min = 0;
    $Regionx = $this->getRegionByCountry($Regional_focus)[0]['region'];

    $builder = $this->db->table('investor')
        ->where("Min_Cheque BETWEEN '$min' AND '$Min_Cheque'")
        ->orLike('Industry_Focus', 'open to all sectors' ?? '', 'both')
        ->orLike('Industry_Focus', $Industry_Focus ?? '', 'both')
        ->orLike('Investment_Stage_Focus', $Investment_Stage_Focus ?? '', 'both')
        ->orLike('Implementation_Stage_Focus', $Implementation_Stage_Focus ?? '', 'both')
        ->orLike('Regional_focus', $Regionx ?? '', 'both')
        ->limit(1);

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0 && $Industry_Focus != '') {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function countMatchCorperateStartup($Solution_Corperate, $Core_Interest_Corporate)
{
    $Core_Interest_Corporate = str_replace("'", '', $Core_Interest_Corporate);

    $builder = $this->db->table('Startups_Inv_Ext')
        ->where('Email !=', ''); // Assuming you want to exclude rows where Email is empty

    if (!empty($Solution_Corperate)) {
        $builder->like('Solution_Corperate', $Solution_Corperate, 'both');
    }

    if (!empty($Core_Interest_Corporate)) {
        $builder->orLike('Core_Interest_Corporate', $Core_Interest_Corporate, 'both');
    }

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}

public function MatchCorperateStartup($Solution_Corperate, $Core_Interest_Corporate)
{
    $Core_Interest_Corporate = str_replace("'", '', $Core_Interest_Corporate);

    $builder = $this->db->table('Startups_Inv_Ext')
        ->where('Email !=', ''); // Assuming you want to exclude rows where Email is empty

    if (!empty($Solution_Corperate)) {
        $builder->like('Solution_Corperate', $Solution_Corperate, 'both');
    }

    if (!empty($Core_Interest_Corporate)) {
        $builder->orLike('Core_Interest_Corporate', $Core_Interest_Corporate, 'both');
    }

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function MatchMicrosftStartup($Solution_Corperate, $Core_Interest_Corporate)
{
    $Core_Interest_Corporate = str_replace("'", '', $Core_Interest_Corporate);

    $builder = $this->db->table('Startups_Inv_Ext')
        ->where('Email !=', '') // Assuming you want to exclude rows where Email is empty
        ->where('Event', 'Kenya_Microsoft')
        ->groupStart()
        ->like('Solution_Corperate', $Solution_Corperate, 'both')
        ->orLike('Core_Interest_Corporate', $Core_Interest_Corporate, 'both')
        ->groupEnd();

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function MatchCorperateByIndustry($Industry_Focus, $Need_location)
{
    $builder = $this->db->table('cooperate_info')
        ->where('Email !=', '') // Assuming you want to exclude rows where Email is empty
        ->like('Business_need_support', $Industry_Focus, 'both')
        ->like('Need_locations', $Need_location, 'both');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function MatchCorperateByIndustryServ($Industry_Focus)
{
    $builder = $this->db->table('cooperate_info')
        ->where('Email !=', '') // Assuming you want to exclude rows where Email is empty
        ->like('Business_need_support', $Industry_Focus, 'both');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function MatchCorperateDefaultLimitByOne($Solution_Corperate, $Core_Interest_Corporate)
{	
    $Core_Interest_Corporate = str_replace("'", '', $Core_Interest_Corporate);

    $builder = $this->db->table('cooperate_info');

    if (!empty($Solution_Corperate)) {
        $builder->like('Solution_Corperate', $Solution_Corperate, 'both');
    }

    if (!empty($Core_Interest_Corporate)) {
        $builder->orLike('Core_Interest_Corporate', $Core_Interest_Corporate, 'both');
    }

    $builder->limit(1);

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function MatchCorperateMicrosoft($Solution_Corperate, $Core_Interest_Corporate)
{
    $Core_Interest_Corporate = str_replace("'", '', $Core_Interest_Corporate);

    $builder = $this->db->table('cooperate_info')
        ->where('Event', 'Kenya_Microsoft')
        ->groupStart()
        ->like('Solution_Corperate', $Solution_Corperate, 'both')
        ->orLike('Core_Interest_Corporate', $Core_Interest_Corporate, 'both')
        ->groupEnd();

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function MatchCorperateMicrosoftEvent()
{	
    $builder = $this->db->table('cooperate_info')
        ->where('Event', 'Kenya_Microsoft');

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function MatchCorperateDefaultLimit($Solution_Corperate, $Core_Interest_Corporate)
{	
    $Core_Interest_Corporate = str_replace("'", '', $Core_Interest_Corporate);

    $builder = $this->db->table('cooperate_info');

    if (!empty($Solution_Corperate)) {
        $builder->like('Solution_Corperate', $Solution_Corperate, 'both');
    }

    if (!empty($Core_Interest_Corporate)) {
        $builder->orLike('Core_Interest_Corporate', $Core_Interest_Corporate, 'both');
    }

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function countMatchInvestorDefault($Industry_Focus, $Investment_Stage_Focus, $Implementation_Stage_Focus, $Min_Cheque, $Regional_focus)
{	
    $min = 0;
    $Regionx = $this->getRegionByCountry($Regional_focus)[0]['region'];

    $builder = $this->db->table('investor')
        ->like('Industry_Focus', $Industry_Focus, 'both')
        ->orLike('Investment_Stage_Focus', $Investment_Stage_Focus, 'both')
        ->orLike('Implementation_Stage_Focus', $Implementation_Stage_Focus, 'both')
        ->orLike('Regional_focus', $Regionx, 'both')
        ->where("Min_Cheque BETWEEN '$min' AND '$Min_Cheque'");

    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}


public function countMatchInvestorDefaultAppX($Industry_Focus, $Investment_Stage_Focus, $Implementation_Stage_Focus, $Min_Cheque, $Regional_focus)
{			
    $min = 0;
    $where = "`Industry_Focus` LIKE '%$Industry_Focus%' ESCAPE '!' AND `Min_Cheque` BETWEEN '$min' AND '$Min_Cheque' ESCAPE '!' AND `Investment_Stage_Focus` LIKE '%$Investment_Stage_Focus%' ESCAPE '!'";
    $this->db->table('investor')->where($where);
    $query = $this->db->get();
    $count_row = $query->getNumRows();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}

public function countMatchInvestorDefaultApp($Industry_Focus,$Investment_Stage_Focus,$Implementation_Stage_Focus,$Min_Cheque,$Regional_focus)
{			
		
		$min = 0;
		
// 		$where = "Industry_Focus LIKE '%$Industry_Focus%' OR Industry_Focus LIKE '%open to all sectors%'";
//         $this->db->where($where);
 	   
		$builder= $this->db->table('investor');
		$builder->like('Industry_Focus', 'open to all sectors', 'both');
	        $builder->orLike('Industry_Focus', $Industry_Focus ?? '', 'both');
	        $builder->orLike('Investment_Stage_Focus', $Investment_Stage_Focus ?? '', 'both');
	        $builder->orLike('Implementation_Stage_Focus',$Implementation_Stage_Focus ?? '', 'both');

	  	 $builder->orLike('Regional_focus', $Regional_focus ?? '', 'both');

	      

		$builder->where("Min_Cheque BETWEEN '$min' AND '$Min_Cheque'");	
		
		$query = $builder->get();
		$count_row = $query->getNumRows();
		if($query->getNumRows() > 0 && $Industry_Focus !='' )
        {
   			return $count_row;
        }
		else
        {
    		return 0;
        }
			
}

public function countAllStartup($Solution_Corperate, $Core_Interest_Corporate)
{	
    $this->db->like('Solution_Corperate', $Solution_Corperate, 'both');
    $this->db->orLike('Core_Interest_Corporate', $Core_Interest_Corporate, 'both');
    $query = $this->db->get('Startups_Inv_Ext');
    $count_row = $query->getNumRows();
    if ($count_row > 0 && $Solution_Corperate != '') {
        return $count_row;
    } else {
        return 0;
    }
}

public function countMatchCooperateDefaultApp($Solution_Corperate, $Core_Interest_Corporate)
{	
    $this->db->like('Solution_Corperate', $Solution_Corperate, 'both');
    $this->db->orLike('Core_Interest_Corporate', $Core_Interest_Corporate, 'both');
    $query = $this->db->get('cooperate_info');
    $count_row = $query->getNumRows();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}

public function countMatchMentorDefaultApp($Industry_Focus,$MentorshipFocus,$Implementation_Stage_Focus)
{           
        
        $builder=$this->db->table('mentor_info');
        $builder->like('Mentors_focus',$MentorshipFocus  ?? '','both' );
        $builder->orLike('Industry','Any','both' );
    
        $builder->orLike('Industry',$Industry_Focus ?? '', 'both');

        $builder->orLike('Investment_stage',$Implementation_Stage_Focus ?? '', 'both');

       //$this->db->orLike('Regional_focus', $Regional_focus, 'both');

        $query=$builder->get();
        $count_row = $query->getNumRows();
        if($query->getNumRows() > 0 )
        {
            return $count_row;
        }
        else
        {
            return 0;
        }
            
}

public function MatchMentorDefaultAppByOne($Industry_Focus, $MentorshipFocus, $Implementation_Stage_Focus)
{		 	
    $builder = $this->db->table('mentor_info');
$builder->like('Mentors_focus', $MentorshipFocus ?? '', 'both');
$builder->like('Industry', 'Any', 'both');
$builder->orLike('Industry', $Industry_Focus ?? '', 'both');
$builder->orLike('Investment_stage', $Implementation_Stage_Focus ?? '', 'both');
$builder->limit(1);

$query = $builder->get();
$count_row = $query->getNumRows();

if ($query->getNumRows() > 0 && $MentorshipFocus != '') {
    return $query->getResultArray();
} else {
    return [];
}

}

public function MatchMentorDefaultApp($Industry_Focus, $MentorshipFocus, $Implementation_Stage_Focus)
{			
    $builder = $this->db->table('mentor_info');
$builder->like('Mentors_focus', $MentorshipFocus ?? '', 'both');
$builder->like('Industry', 'Any', 'both');
$builder->orLike('Industry', $Industry_Focus ?? '', 'both');
$builder->orLike('Investment_stage', $Implementation_Stage_Focus ?? '', 'both');

$query = $builder->get();
$count_row = $query->getNumRows();

if ($query->getNumRows() > 0) {
    return $query->getResultArray();
} else {
    return [];
}

}

public function searchStartup($queryEntered)
{		
    $this->db->like('industry', $queryEntered, 'both');
    $this->db->orLike('company_type', $queryEntered, 'both');
    $query = $this->db->get('startups');
    $count_row = $query->getNumRows();
    if ($query->num_rows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}


public function searchStartupLimit($queryEntered)
{		
    $this->db->like('industry', $queryEntered, 'both');
    $this->db->orLike('company_type', $queryEntered, 'both');
    $query = $this->db->get('startups');
    $count_row = $query->getNumRows();
    if ($query->num_rows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function maxInMinimumCheque()
{
    $this->db->selectMax('min_cheque', 'max_id');
    $result = $this->db->get('investors')->getRow();
    return $result->max_id;
}

public function searchStartupsNNN($minCheque)
{		
    $min = 0;
    $this->db->like('Startup_Implementation_Stage', $minCheque, 'before | after | both');
    $query = $this->db->get('Startups_Inv');
    $count_row = $query->getNumRows();
    if ($query->num_rows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function searchInvestorNNN($minCheque)
{		
    $min = 0;
    $this->db->where("Min_Cheque BETWEEN '$min' AND '$minCheque'");
    $query = $this->db->get('investor');
    $count_row = $query->getNumRows();
    if ($query->num_rows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function searchStartupsNNIS($queryEntered)
{
    $this->db->like('Startup_Implementation_Stage', $queryEntered, 'before | after | both');
    $query = $this->db->get('Startups_Inv');
    $count_row = $query->getNumRows();
    if ($query->num_rows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function searchStartupsNN($queryEntered)
{
    $this->db->like('CountryHQ', $queryEntered, 'before | after | both');
    $query = $this->db->get('Startups_Inv');
    $count_row = $query->getNumRows();
    if ($query->num_rows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function searchInvestorNNIS($queryEntered)
{
    $this->db->like('Implementation_Stage_Focus', $queryEntered, 'before | after | both');
    $query = $this->db->get('investor');
    $count_row = $query->getNumRows();
    if ($query->num_rows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function searchInvestorNN($queryEntered)
{
    $this->db->like('Regional_focus', $queryEntered, 'before | after | both');
    $query = $this->db->get('investor');
    $count_row = $query->getNumRows();
    if ($query->num_rows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function searchStartupsNS($queryEntered)
{
    $this->db->like('CurrentInvestmentStage', $queryEntered, 'before | after | both');
    $query = $this->db->get('Startups_Inv');
    $count_row = $query->getNumRows();
    if ($query->num_rows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function searchStartupsN($queryEntered)
{
    $this->db->like('PrimaryBusinessIndustry', $queryEntered, 'before | after | both');
    $query = $this->db->get('Startups_Inv');
    $count_row = $query->getNumRows();
    if ($query->num_rows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function searchInvestorNS($queryEntered)
{
    $this->db->orLike('Industry_Focus', $queryEntered, 'before | after | both');
    $this->db->orLike('Investment_Stage_Focus', $queryEntered, 'before | after | both');
    $query = $this->db->get('investor');
    $count_row = $query->getNumRows();
    if ($query->num_rows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function searchInvestorN($queryEntered)
{
    $this->db->orLike('Industry_Focus', $queryEntered, 'before | after | both');
    $query = $this->db->get('investor');
    $count_row = $query->getNumRows();
    if ($query->num_rows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function searchInvestor($queryEntered, $queryFund)
{
    $min = $this->maxInMinimumCheque();
    $this->db->like('industry_focus', $queryEntered, 'both');
    $this->db->orLike('investor_type', $queryEntered, 'both');
    $this->db->where('min_cheque >=', $queryFund);
    $query = $this->db->get('investors');
    $count_row = $query->getNumRows();
    if ($query->num_rows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function searchIndustry($queryEntered)
{
    $this->db->like('industry', $queryEntered, 'both');
    $this->db->limit(5);
    $query = $this->db->get('industry');
    $count_row = $query->getNumRows();
    if ($query->num_rows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}


public function implementationStageByCode($stages)
{
    $query = $this->db->table('Implementation_Stages')
                      ->where('Stages', $stages)
                      ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}
public function implementationStage()
{
    $query = $this->db->table('Implementation_Stages')
                      ->orderBy('id', 'ASC')
                      ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}
public function getAdminDetails($email)
{
    $builder = $this->db->table('admin');
    $builder->where('email', $email);
    
    $query = $builder->get();
    
    if ($query->getNumRows() > 0) {
        return $query->getRowArray(); // Use getRowArray() to fetch a single row
    } else {
        return null; // Return null instead of an empty array
    }
}
public function getAdmin($email)
{
    $builder = $this->db->table('admin');
    $builder->where('email', $email);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function countOnboardingFiles()
{			
		
		$query = $this->db->table('files')->get();
    $count_row = $query->getNumRows();
    
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
			
}
public function countOnboardingInvestors()
{			
		
	$query = $this->db->table('investor')->get();
    $count_row = $query->getNumRows();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }

}

public function countWebinarAttendance($event)
{
    // $db = \Config\Database::connect();
    $builder = $this->db->table('event_attend');

    $builder->select('COUNT(*) as count')
            ->where('event', $event)
            ->where('email !=', '')
            ->groupBy('email');

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        $result = $query->getRow();
        return $result->count;
    } else {
        return 0;
    }
}


public function countFreshworksStartup()
{			
	$builder = $this->db->table('Startups_Inv_Ext');
    $builder->where('Event', 'Freshworks');
    
    $query = $builder->get();
    $count_row = $query->getNumRows();
    
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
			
}

public function countMicrosoftStartup($Event)
{			
	$builder = $this->db->table('Startups_Inv_Ext');

    $builder->where('Event', $Event);
    $query = $builder->get();

    $count_row = $query->getNumRows();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
			
}

public function countMicrosoftCorporate($Event)
{			
	$query = $this->db->table('cooperate_info')->where('Event', $Event)->get();
    $count_row = $query->getNumRows();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}


public function countAllUsersStartup()
{			
    $query = $this->db->table('login')
    ->where('account_type', 'startup')
    ->orWhere('account_type IS NULL')
    ->get();

    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
                
}

public function countAllUsersIndividuals()
{			
    $builder = $this->db->table('login');

    $builder->where('account_type', 'individual')
            ->orWhere('account_type', null);

    $count_row = $builder->countAllResults();

    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
			
}

public function countAllUsers()
{
    $query = $this->db->table('login')->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}

public function countOnboardingFunding()
{			

    $builder = $this->db->table('Startups_Inv');
    $builder->where('Interest_Fund_Raise', 'Fund Raising');
    $query = $builder->get();
    $count_row = $query->getNumRows();
    if ($count_row > 0)
    {
        return $count_row;
    }
    else
    {
        return 0;
    }
			
}
public function countOnboardingStartups()
{			
		
	$query = $this->db->table('Startups_Inv')->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
			
}

public function countOnboardingMentors()
{			
		
	$query = $this->db->table('mentor_info')->get();
    $count_row = $query->getNumRows();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}

public function countOnboardingAccelerators()
{			
		
	$query = $this->db->table('Accelerator')->get(); // Retrieve data from the 'Accelerator' table
    $count_row = $query->getNumRows(); // Get the number of rows

    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
			
}
public function countOnboardingCorporate()
{
    $query = $this->db->table('cooperate_info')->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}
public function countRefByProduct($ref)
{			
	$builder = $this->db->table('pms_ref_link');
    
    $builder->where('ref', $ref);
    $query = $builder->get();
    $count_row = $query->getNumRows();
    
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
			
}
public function countOnboardingCohort()
{			
		
    $query = $this->db->table('startup_co')->get();
    $countRow = $query->getNumRows();

    if ($countRow > 0) {
        return $countRow;
    } else {
        return 0;
    }
			
}
public function countSubcribers()
{			
		
	$query = $this->db->table('package_sub')->get();
    $count_row = $query->getNumRows();
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
			
}

public function countPaidCohort()	
{			
	$query = $this->db->table('package_sub')
	->where('subscription', 'Investor Readiness Cohort')
	->where('payment_status', 'paid')
	->get();

	$count_row = $query->getNumRows();

	if ($count_row > 0) {
	return $count_row;
	} else {
	return 0;
	}
			
}

public function countActiveSubcribers()	
{			
	$builder = $this->db->table('package_sub');

    $builder->where('subscription !=', 'Investor Readiness Cohort');
    $builder->where('status', 'active');

    $count_row = $builder->countAllResults();

    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}

public function countOnboardingInsight()
{			
		
	$builder = $this->db->table('onboard_individual');
    $builder->where('interest_insight_report', 'Insight Report');
    $count_row = $builder->countAllResults();

    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
			
}

public function countOnboardingVenture()
{			
		
	$builder = $this->db->table('onboard_individual');
    
    $builder->where('interest_business_growth', 'Business Growth');
    $query = $builder->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
			
}

public function countOnboardingEventsAttendance()
{			
		
	$query = $this->db->table('wp_event')->get();
    $count_row = $query->getNumRows();
    
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
			
}


// wp_event countOnboardingEvents  countOnboardingGfaMax
public function countOnboardingLearning()
{			
		
	$builder = $this->db->table('onboard_individual');
    
    $builder->where('interest_learning', 'learning');
    $query = $builder->get();
    $count_row = $query->getNumRows();
    
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
			
}

public function countOnboardingGfaMax()
{			
		
	$builder = $this->db->table('onboard_individual');
    
    $builder->where('interest_gfamax', 'gfa-max');
    $query = $builder->get();
    $count_row = $query->getNumRows();
    
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
			
}
public function countOnboardingNews()
{			
		
	$query = $this->db->table('onboard_update')
	->where('interest_update', 'Get Update')
	->get();

	$count_row = $query->getNumRows();

	if ($count_row > 0) {
	return $count_row;
	} else {
	return 0;
	}
			
}
public function countOnboardingOldStartups()
{			
		
	$query = $this->db->table('startup')->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
			
}
public function countSubmittedApp()
{
    $query = $this->db->table('application');
    $count_row = $query->countAllResults();
    return $count_row;
}

public function getAllCustomerInfoByRef($ref_id)
{
    $query = $this->db->table('users')
        ->where('ref_id', $ref_id)
        ->get();
    $count_row = $query->getNumRows();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getAllCustomerInfoByUser($username)
{
    $query = $this->db->table('users')
        ->where('username', $username)
        ->get();
    $count_row = $query->getNumRows();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getAllCorperateById($id)
{
    $query = $this->db->table('cooperate_info')
        ->where('Corporate_ID', $id)
        ->get();
    $count_row = $query->getNumRows();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getAllCandidateById($id)
{
    $query = $this->db->table('candidate')
        ->where('id', $id)
        ->get();
    $count_row = $query->getNumRows();
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getAllInvestorById($id)
{
    $query = $this->db->table('investor')
                      ->where('Investor_ID', $id)
                      ->get();

    $count_row = $query->getNumRows();

    if ($count_row > 0)
    {
        return $query->getResultArray();
    }
    else
    {
        return [];
    }
}

public function getAllMentors()
{
    $query = $this->db->table('mentor_info')
                      ->orderBy('Mentor_ID', 'DESC')
                      ->get();

    $count_row = $query->getNumRows();

    if ($count_row > 0)
    {
        return $query->getResultArray();
    }
    else
    {
        return [];
    }
}


public function getAllMentorByEmail($email)
{
    $query = $this->db->table('mentor_info')
        ->where('Email', $email)
        ->get();

    $countRow = $query->getNumRows();

    if ($countRow > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllMentorById($id)
    {
        return $this->db->table('mentor_info')->where('Mentor_ID', $id)
                    ->get()
                    ->getResultArray();
    }

    public function getAllStartUpsById($id)
    {
        $table = 'startups';
        return $this->db->table($table)
                        ->where('id', $id)
                        ->get()
                        ->getResultArray();
    }

    public function getAllStartUpsByIndustry($industry)
    {
        $table = 'startups';
        return $this->db->table($table)
                        ->where('industry', $industry)
                        ->get()
                        ->getResultArray();
    }
public function getAllFreeSub($package)
{			
		//$this->db->where('refcode', $your_ref);
		$this->db->where('package', $package);		
		$query=$this->db->get('personal_info');
		$count_row = $query->num_rows();
		if($query->num_rows() > 0 )
        {
   			return $query->result_array();    
			    }
		else
        {
    		return 0;
        }
			
}

public function getAllLoginUsers()
{
    $query = $this->db->table('login')
        ->where('account_type', 'startup')
        ->limit(1000)
        ->orderBy('id', 'desc')
        ->get();

    $countRows = $query->getNumRows();

    if ($countRows > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllLoginIndividuals()
{
    $query = $this->db->table('login')
        ->orderBy('id', 'desc')
        ->where('account_type', 'individual')
        ->limit(1000)
        ->get();

    $countRows = $query->getNumRows();
    
    if ($countRows > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllPaidCohort()
{
    $builder = $this->db->table('package_sub');
    $builder->orderBy('id', 'desc');
    $builder->where('payment_status', 'paid');
    $builder->where('subscription', 'Investor Readiness Cohort');
    $query = $builder->get();

    $countRows = $query->getNumRows();

    if ($countRows > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}
public function getAllUsersActivePay()
{
    $query = $this->db->table('package_sub')
        ->orderBy('id', 'desc')
        ->where('status', 'active')
        ->get();

    $countRows = $query->getNumRows();

    if ($countRows > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}
public function getRefByProduct($ref)
{		
    $builder = $this->db->table('pms_ref_link');
    $builder->where('ref', $ref)
            ->orderBy('id', 'desc');

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllUsersPay()
{
    $builder = $this->db->table('package_sub');
    $builder->orderBy('id', 'desc');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllAfricaRegions()
{
    $builder = $this->db->table('africa_regions');
    $builder->orderBy('id', 'desc');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllUsers()
{		
    $builder = $this->db->table('login');
    $builder->orderBy('id', 'desc');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllStartUps()
{		
    $builder = $this->db->table('startups');
    $builder->orderBy('id', 'desc');
    $builder->limit(1000);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function getCountryByRegionExt()
{		
    $builder = $this->db->table('african_countries');
    $builder->orderBy('country', 'asc');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getRegionByCountry($country)
{		
    $builder = $this->db->table('african_countries');
    $builder->where('country', $country);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getCountryByRegion($region)
{		
    $builder = $this->db->table('african_countries');
    $builder->where('region', $region)
            ->orderBy('country', 'asc');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getUser($email)
{
    $query = $this->db->table('login')
        ->where('email', $email)
        ->orderBy('id', 'desc')
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}
public function getSubPayX($email, $subscription)
{
    $query = $this->db->table('package_sub')
        ->where('email', $email)
        ->where('subscription', $subscription)
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResult(); // Use getResult() instead of getResultArray()
    } else {
        return []; // Return an empty array instead of 0
    }
}
public function getSubPay($email, $package)
{
    $query = $this->db->table('package_sub')
        ->where('email', $email)
        ->where('package', $package)
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}
public function getLatestCommission($ref)
{		
    $builder = $this->db->table('commission');
    $builder->where('ref', $ref)
            ->orderBy('id', 'desc')
            ->limit(1);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getRowArray();
    } else {
        return null;
    }
}

public function getAllSubPay($package)
{
    $query = $this->db->table('package_sub')
        ->where('package', $package)
        ->orderBy('id', 'desc')
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getFile($email)
{
    $query = $this->db->table('file_upload')
        ->where('email', $email)
        ->orderBy('id', 'desc')
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getInvestmentStage()
{
    $builder = $this->db->table('Investment_Stages');
    $builder->orderBy('Stages', 'ASC');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}
public function getAllInvestorNById($id)
{			
    $builder = $this->db->table('investor');
    $builder->where('Investor_ID', $id);
    $builder->orderBy('Investor_ID', 'DESC');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllInvestorNByEmail($email)
{
    $builder = $this->db->table('investor');
    $builder->where('Contact_Email', $email);
    $builder->orderBy('Investor_ID', 'DESC');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllInvestorInorder()
{			
    $builder = $this->db->table('investor');
    $builder->orderBy('Contact_Name', 'ASC');
//  $builder->limit(50);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllInvestorN()
{
    return $this->db->table('investor')
                    ->orderBy('Investor_ID', 'DESC')
                    ->get()
                    ->getResultArray();
}

public function getAllAcceleratorById($id)
{
    return $this->db->table('Accelerator')
                    ->orderBy('Accelerator_ID', $id)
                    ->get()
                    ->getResultArray();
}

public function getAllAccelerator()
{
    return $this->db->table('Accelerator')
                    ->orderBy('Accelerator_ID', 'DESC')
                    ->get()
                    ->getResultArray();
}
public function getAllCorporateById($id)
{
    $query = $this->db->table('cooperate_info')->orderBy('Corporate_ID', $id)->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}
public function getAllCorporate()
{
    $query = $this->db->table('cooperate_info')
                      ->orderBy('Corporate_ID', 'DESC')
                      ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllInvestor()
{
    $query = $this->db->table('investors')
                      ->orderBy('id', 'DESC')
                      ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllPrevSub()
{
    $query = $this->db->table('startupinsight')
                      ->orderBy('id', 'DESC')
                      ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function getAllSub($service)
{
    $query = $this->db->table('startupinsight')
        ->where('service', $service)
        ->orderBy('id', 'DESC')
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllOnboard()
{
    $query = $this->db->table('onboard_individual')
        ->orderBy('id', 'DESC')
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}
public function getAllAffiliateAmount()
{			
    $builder = $this->db->table('affiliate_withdraw');
    $builder->orderBy('id', 'DESC');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllAffiliateWithdraw()
{			
    $builder = $this->db->table('affiliate_withdraw');
    $builder->orderBy('id', 'DESC');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getBankDetails($ref)
{			
    $builder = $this->db->table('bank_details');
    $builder->orderBy('id', 'DESC');
    $builder->where('ref', $ref);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllAffiliateAmountByRef($ref)
{			
    $builder = $this->db->table('affiliate_withdraw');
    $builder->orderBy('id', 'DESC');
    $builder->where('ref', $ref);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllUsersPayActive($email)
{		
    $builder = $this->db->table('package_sub');
    $builder->orderBy('id', 'asc');
    $builder->where('email', $email);
    $builder->where('status !=', 'inactive');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllAffiliateByRef($ref)
{			
    $builder = $this->db->table('pms_ref_link');
    $builder->orderBy('id', 'DESC');
    $builder->where('ref', $ref);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllAffiliate()
{			
    $builder = $this->db->table('affiliate');
    $builder->orderBy('id', 'DESC');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllWpEventById($id)
{			
    $builder = $this->db->table('wp_event');
    $builder->orderBy('id', 'DESC');
    $builder->where('wp_id', $id);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getWpEventUserById($id)
{
    $builder = $this->db->table('wp_event');
    $builder->where('id', $id);
    $builder->orderBy('id', 'desc');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function getAllGFAConnections()
{
    $builder = $this->db->table('all_connections');
    $builder->orderBy('id', 'DESC');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}
public function getAllWpEvent()
{
    $query = $this->db->table('wp_event')
        ->orderBy('id', 'DESC')
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}
public function getAllCreditRedeem()
{			
    $builder = $this->db->table('Credit_Redeem');
    $builder->orderBy('Id', 'DESC');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getEventById($Id)
{			
    $builder = $this->db->table('wp_event');
    $builder->where('id', $Id);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getSumOfFiredByWeekly($company)
{			
    $builder = $this->db->table('dcdt_report');
    $builder->selectSum('employ_term');
    $builder->where('ref', $company);
    $result = $builder->get()->getRow();
    
    return $result->employ_term;
}

public function getSumOfHiredByWeekly($company)
{			
    $builder = $this->db->table('dcdt_report');
    $builder->selectSum('new_hiring');
    $builder->where('ref', $company);
    $result = $builder->get()->getRow();
    
    return $result->new_hiring;
}

public function getSumOfHiredByCompany()
{			
    $builder = $this->db->table('Startups_Inv');
    $builder->selectSum('NoOfEmployees');
    $result = $builder->get()->getRow();
    
    return $result->NoOfEmployees;
}

public function getCreditRedeemSumByEmailFree($email)
{
    // Initialize the sum to 0.
    $creditSum = 45;

    // Define the conditions for the database query.
    $conditions = [
        'Email' => $email,
        'Credit' => 15,
        'Credit !=' => 45,
        'More_Info !=' => ''
    ];

    // Execute the database query and calculate the sum.
    $builder = $this->db->table('Credit_Redeem');
    $builder->selectSum('Credit');
    $builder->where($conditions);
    $result = $builder->get()->getRow();

    // If the result is not null, set the creditSum to the calculated sum.
    if ($result !== null) {
        $creditSum = $result->Credit;
    }

    return $creditSum;
}



public function getCreditSumByEmailFree($Email)
{
    $builder = $this->db->table('Credit_Redeem');
    $builder->selectSum('Credit');
    $builder->where('Email', $Email);
    $builder->where('Credit', 15);
    $builder->where('Credit !=', 45);
    $builder->where('More_Info', '');
    $result = $builder->get()->getRow();

    return $result->Credit;
}

public function getCreditRedeemSumByEmailPaid($Email)
{
    $builder = $this->db->table('Credit_Redeem');
    $builder->selectSum('Credit');
    $builder->where('Email', $Email);
    $builder->where('Credit >=', 45);
    $builder->where('Credit !=', 15);
    $builder->where('More_Info !=', '');
    $result = $builder->get()->getRow();

    return $result->Credit;
}

public function getCreditSumByEmailPaid($Email)
{
    $builder = $this->db->table('Credit_Redeem');
    $builder->selectSum('Credit');
    $builder->where('Email', $Email);
    $builder->where('Credit', 45);
    $builder->where('More_Info', '');
    $builder->where('Credit !=', 15);
    $result = $builder->get()->getRow();

    return $result->Credit;
}

public function getCreditAciveSub($Email)
{			
	$query = $this->db->table('package_sub')
	->selectSum('credit')
	->where('email', $Email)
	->where('status', 'active')
	->get();

	$result = $query->getRow();
	return $result->credit;
}


public function getCreditRedeemById($Id)
{
    $builder = $this->db->table('Credit_Redeem');
    $builder->where('Id', $Id);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getCreditRedeemSumByEmail($Email)
{
    $builder = $this->db->table('Credit_Redeem');
    $builder->selectSum('Credit');
    $builder->where('Email', $Email);
    $result = $builder->get()->getRow();

    return $result->Credit;
}

public function checkCreditRedeemByEmail($Email, $Credit)
{
    $builder = $this->db->table('Credit_Redeem');
    $builder->where('Email', $Email);
    $builder->orderBy('Id', 'DESC');
    $builder->where('Credit >=', $Credit);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getCreditRedeemByEmail($Email)
{
    $builder = $this->db->table('Credit_Redeem');
    $builder->where('Email', $Email);
    $builder->orderBy('Id', 'DESC');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}


public function getAllWebinars()
{
    
    $query = $this->db->table('event_attend')
        ->groupBy('event, id') // Add 'id' to the GROUP BY clause
        ->orderBy('id', 'DESC')
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResult(); // Use getResult() instead of getResultArray()
    } else {
        return []; // Return an empty array instead of 0
    }
}


			


public function getAllCohort()
{
    $builder = $this->db->table('startup_co');
    $builder->groupBy('email');
    $builder->orderBy('id', 'DESC');
    
    $query = $builder->get();
    
    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}


public function getAllNews()
{
    $builder = $this->db->table('onboard_update');
    $builder->orderBy('id', 'DESC');
    $builder->where('interest_update', 'Get Update');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}


//
public function getAllGfaMax()
{
    $query = $this->db->table('onboard_individual')
        ->where('interest_gfamax', 'gfa-max')
        ->orderBy('id', 'DESC')
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}
public function getAllLearning()
{
    $query = $this->db->table('onboard_individual')
        ->orderBy('id', 'DESC')
        ->where('interest_learning', 'Learning')
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}
public function getAllInsight()
{
    $this->table('onboard_individual')
        ->where('interest_insight_report', 'Insight Report')
        ->orderBy('id', 'DESC');

    $query = $this->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllVentureBuilding()
{
    $query = $this->table('onboard_individual')
        ->where('interest_business_growth', 'Business Growth')
        ->orderBy('id', 'DESC')
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}



public function getAllCohortEventByCompany($Company)
{
    $builder = $this->db->table('Cohort');
    $builder->where('Company', $Company)
        ->orderBy('Id', 'DESC');
    
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllCohortEvent()
{			
		
	$query = $this->db->table('Cohort')
	->orderBy('Id', 'DESC')
	->get();

if ($query->getNumRows() > 0) {
$result = $query->getResultArray();
} else {
$result = 0;
}
			
}

public function getAllCohortEventById($id)
{			
		
	$query = $this->db->table('Cohort')
	->where('Id', $id)
	->orderBy('Id', 'DESC')
	->get();

if ($query->getNumRows() > 0) {
$result = $query->getResultArray();
} else {
$result = 0;
}
			
}

public function getAllCohortById($id)
{
    $query = $this->db->table('startup_co')
        ->where('id', $id)
        ->orderBy('id', 'DESC')
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getOnboardIndividual($email)
{
    $query = $this->db->table('onboard_individual')
        ->where('email', $email)
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllDcdtByEmailRef($email)
{
    $query = $this->db->table('pms_ref_link')
        ->where('email', $email)
        ->orderBy('id', 'desc')
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllOldStartupByEmail($email)
{
    return $this->db->table('startupinsight')
        ->where('email', $email)
        ->orderBy('id', 'DESC')
        ->get()
        ->getResultArray();
}

public function getAllCohortByEmail($email)
{
    $builder = $this->db->table('startup_co');
    $builder->where('email', $email);
    $builder->orderBy('id', 'DESC');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllStartUpByEmailExt($Email)
{
    $builder = $this->db->table('Startups_Inv_Ext');
    $builder->orderBy('Id', 'DESC');
    $builder->where('Email', $Email);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}



public function getStoryPostById($id)
{
    $builder = $this->db->table('story');
    $builder->orderBy('story_id', 'DESC');
    $builder->where('story_id', $id);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getEventsPostById($id)
{
    $builder = $this->db->table('event');
    $builder->orderBy('event_id', 'DESC');
    $builder->where('event_id', $id);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}




public function getAllEventsPost()
{
    $query = $this->db->table('event')
                ->orderBy('event_id', 'DESC')
                ->where('status', 'active')
                ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}



public function countEventsTypes($type)
{
    $builder = $this->db->table('event');
    $builder->orderBy('event_id', 'DESC');
    $builder->where('event_type', $type);
    $count_row = $builder->countAllResults();

    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}

public function countEventAttenders()
{
    $builder = $this->db->table('wp_event');
    $count_row = $builder->countAllResults();

    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }
}

public function getStoryPost()
{
    $builder = $this->db->table('story');
    $builder->orderBy('story_id', 'DESC');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getEventsPost($event_type)
{
    $builder = $this->db->table('event');
    $builder->orderBy('event_id', 'DESC');
    $builder->where('event_type', $event_type);
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getAllStartUpNByEmailExtX($email)
{
    $builder = $this->db->table('Startups_Inv_Ext');
    $builder->where('Email', $email);
    $builder->orderBy('Id', 'DESC');
    
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}
public function getAllStartUpNByEmailExt($id)
    {
        $builder = $this->table('Startups_Inv_Ext');
        $builder->orderBy('Id', 'DESC');
        $builder->where('Id', $id);
        $query = $builder->get();

        if ($query->getNumRows() > 0) {
            return $query->getResultArray();
        } else {
            return 0;
        }
    }
public function allStartupDefault()
{
    $builder = $this->db->table('Startups_Inv');
    $builder->orderBy('STUP_ID', 'DESC');

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllStartUpNById($id)
{
    $builder = $this->db->table('Startups_Inv');
    $builder->orderBy('STUP_ID', 'DESC');
    $builder->where('STUP_ID', $id);

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}
public function getStartupMicrosoft()
{
    $builder = $this->db->table('Startups_Inv_Ext');
    $builder->where('Event', 'Kenya_Microsoft');
    $builder->orderBy('Id', 'DESC');

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function MatchDcdtStartups()
{
    return $this->db->table('pms_ref_link')
        ->where('ref', 'dcdt')
        ->where('status', 'approved')
        ->get()
        ->getResultArray();
}

public function MatchDcdtStartup()
{
    return $this->db->table('pms_ref_link')
        ->where('ref', 'dcdt')
        ->get()
        ->getResultArray();
}

public function getCorperateEventRefByEmail($email, $ref)
{
    $builder = $this->db->table('cooperate_info');
    $builder->where('Event', $ref);
    $builder->where('Need_contact_email', $email);
    $builder->orderBy('Corporate_ID', 'DESC');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function matchRefStartups($ref)
{
    $query = $this->db->query("SELECT * FROM pms_ref_link WHERE ref='$ref' AND status='approved'");
    return $query->getResultArray();
}

public function matchRefStartup($ref)
{
    $query = $this->db->query("SELECT * FROM pms_ref_link WHERE ref='$ref' order by id desc");
    return $query->getResultArray();
}

public function getAllIndustry()
{
    $builder = $this->db->table('industry');
    $builder->orderBy('industry', 'ASC');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}


public function getCorperateDcdtByEmail($email)
{
    $builder = $this->db->table('cooperate_info');
    $builder->where('Event', 'dcdt');
    $builder->where('Need_contact_email', $email);
    $builder->orderBy('Corporate_ID', 'DESC');

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getCorperateMicrosoftByEmailReport()
{
    $builder = $this->db->table('cooperate_info');
    $builder->where('Event', 'Kenya_Microsoft');
    $builder->orderBy('Corporate_ID', 'DESC');

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllCorperateByEmail($email)
{
    $builder = $this->db->table('cooperate_info');
    $builder->where('Need_contact_email', $email);
    $builder->orderBy('Corporate_ID', 'DESC');

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getCorperateByEmail($email)
    {
        return $this->db->table('cooperate_info')
            ->where('Need_contact_email', $email)
            ->orderBy('Corporate_ID', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function getCorperateMicrosoftByEmail($email)
    {
        return $this->db->table('cooperate_info')
            ->where('Event', 'Kenya_Microsoft')
            ->where('Need_contact_email', $email)
            ->orderBy('Corporate_ID', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function getStartupMicrosoftByEmailExt($email)
    {
        return $this->db->table('Startups_Inv_Ext')
            ->where('Email', $email)
            ->orderBy('Id', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function getStartupByIdRef($id)
    {
        return $this->db->table('pms_ref_link')
            ->where('id', $id)
            ->orderBy('id', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function getStartupById($id)
    {
        return $this->db->table('Startups_Inv')
            ->where('STUP_ID', $id)
            ->orderBy('STUP_ID', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function getStartupMicrosoftByEmail($email)
    {
        return $this->db->table('Startups_Inv')
            ->where('Contact_Email', $email)
            ->orderBy('STUP_ID', 'DESC')
            ->get()
            ->getResultArray();
    }

public function getAllStartUpNByEmailExtXY($email)
    {
        return $this->db->table('Startups_Inv_Ext')
            ->where('Email', $email)
            ->orderBy('Id', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function getAllStartUpMicrosoft()
    {
        return $this->db->table('Startups_Inv')
            ->where('Event', 'Kenya_Microsoft')
            ->orderBy('STUP_ID', 'DESC')
            ->get()
            ->getResultArray();
    }

public function getAllStartUpNByEmailMicrosoft($email)
{	
	$builder = $this->db->table('Startups_Inv');
    $builder->where('Event', 'Kenya_Microsoft');
    $builder->where('Contact_Email', $email);	
    $builder->orderBy('STUP_ID', 'DESC');

    $query = $builder->get();

    if ($query->getNumRows() > 0)
    {
        return $query->getResultArray();
    }
    else
    {
        return 0;
    }

}

public function getAllStartUpNByEmail($email)
{
    $builder = $this->db->table('Startups_Inv');
    $builder->select('*');
    $builder->where('Contact_Email', $email);
    $builder->orderBy('STUP_ID', 'DESC');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}
public function getAllFunding()
{
    $query = $this->db->table('Startups_Inv')
        ->where('Interest_Fund_Raise', 'Fund Raising')
        ->orderBy('STUP_ID', 'DESC')
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllCorporateNMicrosft($Event)
{
    $query = $this->db->table('cooperate_info')
        ->where('Event', $Event)
        ->where('Key_contact_name !=', '')
        ->orderBy('Corporate_ID', 'DESC')
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllWebinarReg($event)
{
    $query = $this->db->table('event_attend')
        ->select('MAX(id) as id, email')
        ->where('event', $event)
        ->where('email !=', '')
        ->groupBy('email')
        ->orderBy('id', 'DESC')
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getAllStartUpFreshworks()
    {
        return $this->db->table('Startups_Inv_Ext')
            ->where('Event', 'Freshworks')
            ->orderBy('Id', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function getAllStartUpNMicrosft($Event)
    {
        return $this->db->table('Startups_Inv_Ext')
            ->where('Event', $Event)
            ->orderBy('Id', 'DESC')
            ->get()
            ->getResultArray();
    }


public function getAllStartUpN()
{
    $query = $this->db->table('Startups_Inv')
        ->orderBy('STUP_ID', 'DESC')
        ->limit(1000)
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}



public function getAllStartUp()
    {
        return $this->db->table('startup')
            ->orderBy('id', 'DESC')
            ->get()
            ->getResultArray();
    }
public function getStartUp($email)
{
    $query = $this->db->table('startup')
                      ->where('email', $email)
                      ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function getProfile($email)
{
		$this->table = 'personal_info';
        return $this->where('email', $email)
                    ->get()
                    ->getResultArray();
    }

    public function getFund($email)
    {
        $this->table = 'fund_info';

        return $this->where('email', $email)
                    ->get()
                    ->getResultArray();
    }

    public function getBusiness($email)
    {
        $this->table = 'business_info';

        return $this->where('email', $email)
                    ->get()
                    ->getResultArray();
    }
    public function insertCohortEvent($data)
    {
        $builder = $this->db->table('startup_co');
        $builder->insert($data);
    
        if ($builder->affectedRows() > 0) {
            return $builder->affectedRows();
        } else {
            return 0;
        }
    }
    
public function insertData($table, $data)
{
    $this->db->insert($table, $data);
    
    return $this->db->affected_rows();
}

public function insertInvestorAgreementFile($data)
{
    return $this->insertData('agreement_file', $data);
}

public function insertInvestorAgreement($data)
{
    return $this->insertData('investor_agreement', $data);
}

public function insertCommission($data)
{
    return $this->insertData('commission', $data);
}

// Add similar functions for other tables...

public function getSub($id)
{
    $query = $this->db->table('login')
                      ->where('id', $id)
                      ->get();

    $count_row = $query->getNumRows();
    if ($count_row > 0)
    {
        return $query->getResultArray();
    }
    else
    {
        return [];
    }
}



 public function updateInvestorAgreement($data, $id)
    {
        $this->db->table('investor_agreement')->where('id', $id)->update($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }

    public function updateStoryStatus($data, $id)
    {
        $this->db->table('story')->where('story_id', $id)->update($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }

    public function updateEventStatus($data, $id)
    {
        $this->db->table('event')->where('event_id', $id)->update($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }

    public function updateStartupRefStatus($data, $email)
    {
        $this->db->table('pms_ref_link')->where('email', $email)->update($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }


public function updateFileInvestorStatus($data, $id)
    {
        $this->db->table('investor_file')->where('id', $id)->update($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }

    public function updateFileStatus($data, $id)
    {
        $this->db->table('files')->where('File_Id', $id)->update($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }

    public function updateEvent($data, $id)
    {
        $this->db->table('wp_event')->where('id', $id)->update($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }

    public function updateCredit($data, $id)
    {
        $this->db->table('Credit_Redeem')->where('Id', $id)->update($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }

    public function getCorperateRefByEmail($email, $ref)
{
    $builder = $this->db->table('cooperate_info');
    $builder->where('Event', $ref);
    $builder->where('Need_contact_email', $email);
    $builder->orderBy('Corporate_ID', 'DESC');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}


    public function updateCohort($data, $id)
    {
        $this->db->table('Cohort')->where('Id', $id)->update($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }

    public function approveForm($data, $id)
    {
        $this->db->table('login')->where('id', $id)->update($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }

public function getSubDetails($package, $subscription, $subscription_type, $amount)
    {
        $builder = $this->db->table('package_desc');
        $builder->where('package', $package);
        $builder->where('subscription', $subscription);
        $builder->where('subscription_type', $subscription_type);
        $builder->where('amount', $amount);
        $query = $builder->get();

        if ($query->getNumRows() > 0) {
            return $query->getResultArray();
        } else {
            return 0;
        }
    }

    // Function to insert a record
    public function insertSubDetails($data)
    {
        $builder = $this->db->table('package_desc');
        $builder->insert($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }

    // Function to update a record
    public function updateSubDetails($data, $id)
    {
        $builder = $this->db->table('package_desc');
        $builder->where('id', $id);
        $builder->update($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }

public function insertNotify($data)
    {
        $builder = $this->db->table('notification');
        $builder->insert($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }

    // Function to insert a package record
    public function insertSub($data)
    {
        $builder = $this->db->table('package');
        $builder->insert($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }

    // Function to insert a package_desc record
    

    // Function to insert a wallet_log record
    public function insertWalletLog($data)
    {
        $builder = $this->db->table('wallet_log');
        $builder->insert($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }
public function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
//Function to count notifications
    public function countNotify($status, $send_to)
    {
        $builder = $this->db->table('notification');
        $builder->where('send_to', $send_to);
        $builder->where('status', $status);

        $count_row = $builder->countAllResults();

        if ($count_row > 0) {
            return $count_row;
        } else {
            return 0;
        }
    }

    // Function to get notifications
    public function getNotify($status, $send_to)
    {
        $builder = $this->db->table('notification');
        $builder->where('send_to', $send_to);
        $builder->where('status', $status);

        $query = $builder->get();

        if ($query->getResult()) {
            return $query->getResultArray();
        } else {
            return 0;
        }
    }

    // Function to edit package_desc details
    public function editSubDetails($data, $package, $subscription, $subscription_type, $amount)
    {
        $builder = $this->db->table('package_desc');
        $builder->where('package', $package);
        $builder->where('subscription', $subscription);
        $builder->where('subscription_type', $subscription_type);
        $builder->where('amount', $amount);
        $builder->update($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }

    // Function to edit package details
    public function editSub($data, $id)
    {
        $builder = $this->db->table('package');
        $builder->where('id', $id);
        $builder->update($data);

        if ($this->db->affectedRows() > 0) {
            return $this->db->affectedRows();
        } else {
            return 0;
        }
    }

    // Function to check cohort registration
    public function checkCohortReg($email)
    {
        $builder = $this->db->table('startup_co');
        $builder->where('email', $email);

        $query = $builder->get();

        if ($query->getResult()) {
            return $query->getResultArray();
        } else {
            return 0;
        }
    }

    // Function to check login registration
    public function checkLoginReg($email)
    {
        $builder = $this->db->table('login');
        $builder->where('email', $email);

        $query = $builder->get();

        if ($query->getResult()) {
            return $query->getResultArray();
        } else {
            return 0;
        }
    }


// Function to check event registration
    public function checkEventReg($Event_Name, $Event_Attendance_Email)
    {
        $builder = $this->db->table('Event');
        $builder->where('Event_Name', $Event_Name);
        $builder->where('Event_Attendance_Email', $Event_Attendance_Email);

        $query = $builder->get();

        if ($query->getResult()) {
            return $query->getResultArray();
        } else {
            return 0;
        }
    }

    // Function to delete login user
    public function deleteLoginUser($email)
    {
        $tables = ['login'];
        $this->db->table($tables)->where('email', $email)->delete();
    }

    // Function to delete invite user
    public function deleteInviteUser($id)
    {
        $tables = ['invite'];
        $this->db->table($tables)->where('Id', $id)->delete();
    }

    // Function to delete wallet log
    public function deleteWalletLog($id)
    {
        $tables = ['wallet_log'];
        $this->db->table($tables)->where('id', $id)->delete();
    }

    // Function to delete perks category
    public function deletePerksCategory($id)
    {
        $tables = ['perks_category'];
        $this->db->table($tables)->where('id', $id)->delete();
    }

    // Function to delete perks and perks data
    public function deletePerks($ref_id)
    {
        $tables = ['perks', 'perks_data'];
        $this->db->table($tables)->where('ref_id', $ref_id)->delete();
    }

    // Function to delete perks redeem
    public function deletePerksRedeem($id)
    {
        $tables = ['perks_redeem'];
        $this->db->table($tables)->where('id', $id)->delete();
    }

    // Function to delete event and post data
    public function deleteEvent($ref_id)
    {
        $tables = ['event', 'post_data'];
        $this->db->table($tables)->where('ref_id', $ref_id)->delete();
    }

    // Function to delete cohort
    public function deleteCohort($id)
    {
        $tables = ['Cohort'];
        $this->db->table($tables)->where('Id', $id)->delete();
    }
// Function to delete event attendee
    public function deleteEventAttendee($id)
    {
        $tables = ['wp_event'];
        $this->db->table($tables)->where('id', $id)->delete();
    }

    // Function to delete credit
    public function deleteCredit($id)
    {
        $tables = ['Credit_Redeem'];
        $this->db->table($tables)->where('Id', $id)->delete();
    }

    // Function to delete wallet
    public function deleteWallet($id)
    {
        $tables = ['wallet'];
        $this->db->table($tables)->where('id', $id)->delete();
    }

    // Function to delete admin record and users
    public function deleteAdminRecord($ref_id)
    {
        $tables = ['admin', 'users'];
        $this->db->table($tables)->where('ref_id', $ref_id)->delete();
    }

    // Function to delete manifest
   public function deleteManifest($id)
    {
        $builder = $this->db->table('manifest');
        $builder->where('customer_id', $id);
        $builder->delete();
    }

    public function deletePaymentLog($id)
    {
        $builder = $this->db->table('payment_log');
        $builder->where('id', $id);
        $builder->delete();
    }

    public function deleteFile($id)
    {
        $builder = $this->db->table('files');
        $builder->where('File_Id', $id);
        $builder->delete();
    }

    public function deleteFaq($id)
    {
        $builder = $this->db->table('faq');
        $builder->where('id', $id);
        $builder->delete();
    }


public function getFilex($category, $id)
{
    $this->db->table('file')
             ->where('category', $category)
             ->where('ref_id', $id);

    $query = $this->db->get();
    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getRecentFileUploadedXByEmail($Email)
    {
        $builder = $this->db->table('files');
        $builder->where('Email', $Email);
        $builder->get();
        
        if ($builder->countAllResults() > 0) {
            return $builder->getResultArray();
        } else {
            return 0;
        }
    }

    public function getRecentFileUploadedXById($File_Id)
    {
        $builder = $this->db->table('files');
        $builder->where('File_Id', $File_Id);
        $builder->get();

        if ($builder->countAllResults() > 0) {
            return $builder->getResultArray();
        } else {
            return 0;
        }
    }

    public function getInvestorsAgreementByEmail($email, $id)
    {
        $builder = $this->db->table('investor_agreement');
        $builder->where('email', $email);
        $builder->where('connect_id', $id);
        $builder->orderBy('id', 'desc');
        $builder->get();

        if ($builder->countAllResults() > 0) {
            return $builder->getResultArray();
        } else {
            return 0;
        }
    }

    public function getInvestorsAgreementById($id)
    {
        $builder = $this->db->table('investor_agreement');
        $builder->where('connect_id', $id);
        $builder->orderBy('id', 'desc');
        $builder->get();

        if ($builder->countAllResults() > 0) {
            return $builder->getResultArray();
        } else {
            return 0;
        }
    }

    public function getInvestorsConnectionById($id)
    {
        $builder = $this->db->table('all_connections');
        $builder->where('id', $id);
        $builder->get();

        if ($builder->countAllResults() > 0) {
            return $builder->getResultArray();
        } else {
            return 0;
        }
    }

    public function getInvestorsConnectionBySearch($email, $deals)
    {
        $builder = $this->db->table('all_connections');
        $builder->where('email', $email);
        $builder->orderBy('id', 'desc');
        $builder->like('status', $deals);
        $builder->orLike('invest_type', $deals);
        $builder->get();

        if ($builder->countAllResults() > 0) {
            return $builder->getResultArray();
        } else {
            return 0;
        }
    }

public function getInvestorsConnectionByEmail($email)
{
    $query = $this->db->table('all_connections')
                      ->where('email', $email)
                      ->orderBy('id', 'desc')
                      ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

function getInvestorsFileUploadedByEmail($email)
{
    $query = $this->db->table('investor_file')
                ->where('email', $email)
                ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

function getInvestorsFileUploadedById($fileId)
{
    $query = $this->db->table('investor_file')
                ->where('id', $fileId)
                ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

function getInvestorsFileUploaded()
{
    $query = $this->db->table('investor_file')
                ->orderBy('id', 'DESC')
                ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return 0;
    }
}

public function getRecentFileUploadedX()
{
    return $this->db->table('files')
                    ->orderBy('File_Id', 'desc')
                    ->get()
                    ->getResultArray();
}

public function getRecentFileUploaded($email)
{
    return $this->db->table('files')
                    ->orderBy('File_Id', 'desc')
                    ->where('Email', $email)
                    ->get()
                    ->getResultArray();
}

public function getPhoto($id, $type)
{    
    $builder = $this->db->table('file');
    $builder->where('ref_id', $id);
    $builder->where('type', $type);
    $builder->get();

    if ($builder->countAllResults() > 0) {
        return $builder->getResultArray();
    } else {
        return 0;
    }
}

public function subCategory($category)
{
    $builder = $this->db->table('sub_category');
    $builder->where('cat', $category);
    $builder->groupBy('sub_cat');
    $builder->get();

    if ($builder->countAllResults() > 0) {
        return $builder->getResultArray();
    } else {
        return 0;
    }
}


public function getCohortHarmattan()
{
    $builder = $this->db->table('startup_co');
    $builder->where('cohort_type', 'harmattan');
    $builder->orderBy('id', 'DESC');

    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}

public function countCohortHarmattan()
{			
		
	$query = $this->db->table('startup_co')
	->where('cohort_type', 'harmattan')
	->get();

	$count_row = $query->getNumRows();

	if ($count_row > 0) {
		return $count_row;
	} else {
		return 0;
	}
			
}



public function check_sso_email($email, $website)
{
    // $db = \Config\Database::connect(); // Get the database instance

    $builder = $this->db->table('wp_sso_cred');
    $builder->select('*');
    $builder->where('Email', $email);
    $builder->where('Website', $website);
    $query = $builder->get();

    $count_row = $query->getNumRows();

    if ($count_row > 0) {
        return 1;
    } else {
        return [];
    }
}


public function getPoeInvestment()
{
    $builder = $this->db->table('startup_co');
    $builder->where('cohort_type', 'Botswana');
    $builder->orderBy('id', 'DESC');
    $query = $builder->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray();
    } else {
        return [];
    }
}
	public function countPoeInvestment(){
		$builder = $this->db->table('startup_co');
    
    $builder->where('cohort_type', 'Botswana');
    $builder->orderBy('id', 'DESC');
    
    $count_row = $builder->countAllResults();
    
    if ($count_row > 0) {
        return $count_row;
    } else {
        return 0;
    }

	}
	
	

	public function getActiveUsers()
	{
					
		$builder = $this->db->table('user_activity');
		$builder->orderBy('ID', 'DESC');
		$query = $builder->get();
	
		if ($query->getNumRows() > 0) {
			$all_activity = $query->getResultArray();
	
			$all_email = [];
	
			foreach ($all_activity as $activity) {
				array_push($all_email, $activity['UserEmail']);
			}
	
			return array_unique($all_email);
		} else {
			return 0;
		}
				
	}

	public function getRecentActivity($email)
{
    $query = $this->db->table('user_activity')
        ->where('UserEmail', $email)
        ->orderBy('ID', 'DESC')
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getRowArray(); // Use getRowArray() to get a single row
    } else {
        return null; // Return null instead of 0
    }
}

public function getSingleUserActivity($email)
{
    $query = $this->db->table('user_activity')
        ->where('UserEmail', $email)
        ->orderBy('ID', 'DESC')
        ->get();

    if ($query->getNumRows() > 0) {
        return $query->getResultArray(); // Use getResultArray() to get multiple rows
    } else {
        return []; // Return an empty array instead of 0
    }
}


public function check_dcdt_email($email)
{
    $builder = $this->db->table('pms_ref_link');
    $builder->where('ref', 'dcdt');
    $builder->where('email', $email);

    $count_row = $builder->countAllResults();
    
    return ($count_row > 0) ? 1 : 0;
}


public function getCohortPrograms($program)
{
    $builder = $this->db->table('startup_co');
    $builder->where('cohort_type', $program);
    $builder->orderBy('id', 'DESC');
    
    $results = $builder->get()->getResultArray();

    return $results;
}

public function countCohortPrograms($program)
{
    $builder = $this->db->table('startup_co');
    $builder->where('cohort_type', $program);
    
    $count_row = $builder->countAllResults();

    return $count_row;
}


public function getDownloads($table_name, $column_name = null, $column_value = null)
{
    $builder = $this->db->table($table_name);

    if ($column_name && $column_value) {
        $builder->where($column_name, $column_value);
    }

    $results = $builder->get()->getResultArray();

    return $results;
}




   public function getUniqueUsersActivities()
   {
	//    $this->db->distinct();
	// 	$this->db->select('UserAction');
	// 	$this->db->from('user_activity');
	// 	$query = $this->db->get();
	// 	return $query->result();

		$this->db->distinct();
		$this->db->select('UserAction, COUNT(*) as count');
        $this->db->from('user_activity');
        $this->db->group_by('UserAction');
        $this->db->where('UserAction !=', 'checkProfileErrorDemo'); // Specify the value to exclude
        $query = $this->db->get();
        return $query->result();
   }

//    public function countDistinctData() {
// 		$this->db->distinct();
// 		$this->db->select('UserAction');
// 		$this->db->from('user_activity');
// 		$query = $this->db->get();
// 		return $query->num_rows();
// 	}

    public function getfgnalat(){
        $builder = $this->db->table('wp_sso_cred');
        $builder->where('Website', 'remsana');
        
        $uniqueEmails = $builder->select('email')->get()->getResult();

        if (!empty($uniqueEmails)) {
            $emails = array_column($uniqueEmails, 'email');

            $resultQuery = $this->db->table('Startups_Inv')
                ->select('user_ext_info.middlename', 'user_ext_info.email')
                ->join('user_ext_info', 'user_ext_info.email = Startups_Inv.Contact_Email', 'left')
                ->whereIn('Startups_Inv.Contact_Email', $emails)
                ->whereIn('user_ext_info.email', $emails)
                ->get();

            $results = $resultQuery->getResult();
        }

        return $results;
    }


}