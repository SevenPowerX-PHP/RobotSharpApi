<?php

namespace FFormula\RobotSharpApi\Model;

class Task extends Record
{
    public function selectById($taskId) : Task
    {
        $this->row = $this->db->select1Row('
            SELECT id, authorId, name, sectorId, sector, step
              FROM task
             WHERE id = ?', [$taskId]);
        return $this;
    }

    public function getList($dictId) : array
    {
        return $this->db->selectRows('
            SELECT task.id, authorId, caption, sector
              FROM task
              JOIN taskDict 
                ON task.id = taskDict.taskId
               AND dictId = ?
          ORDER BY task.step', [ $dictId ]);
    }

}