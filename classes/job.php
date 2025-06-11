<?php
class Job
{
  private $conn;

  public function __construct($db)
  {
    $this->conn = $db;
  }

  // For job LIST - get all jobs with basic info
  public function getAllJobs($limit = null)
  {
    $query = "SELECT id, job_title, company_name, company_logo, job_type, 
                        category, salary_min, salary_max, location, created_at
                  FROM jobs 
                  WHERE status = 'active' 
                  ORDER BY created_at DESC";

    if ($limit) {
      $query .= " LIMIT :limit";
    }

    $stmt = $this->conn->prepare($query);

    if ($limit) {
      $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    }

    $stmt->execute();
    return $stmt->fetchAll();
  }

  // For job DETAILS - get single job with full info
  public function getJobById($job_id)
  {
    $query = "SELECT * FROM jobs WHERE id = :job_id AND status = 'active'";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':job_id', $job_id, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetch();
  }



  public function createJob($data)
  {
    $query = "INSERT INTO jobs (job_title, company_name, company_logo, job_type, 
                                   category, experience_required, degree_required, 
                                   salary_min, salary_max, location, latitude, longitude, 
                                   job_description, deadline) 
                  VALUES (:job_title, :company_name, :company_logo, :job_type, 
                          :category, :experience_required, :degree_required, 
                          :salary_min, :salary_max, :location, :latitude, :longitude, 
                          :job_description, :deadline)";

    $stmt = $this->conn->prepare($query);

    foreach ($data as $key => $value) {
      $stmt->bindValue(':' . $key, $value);
    }

    return $stmt->execute();
  }

}
?>