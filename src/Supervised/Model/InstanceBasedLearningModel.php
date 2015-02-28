<?php

namespace MachineLearning\Supervised\Model;

use MachineLearning\Data\Entity\Dataset;

Interface InstanceBasedLearningModel
{
    public function setTrainingData(Dataset $dataset);
    public function setTestData(Dataset $dataset);
    public function test();
}