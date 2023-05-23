<?php

namespace app\modules\engineer\models;

use Yii;

/**
 * This is the model class for table "repair".
 *
 * @property int $id
 * @property string|null $repair_number
 * @property int|null $requester_by
 * @property string|null $requester_at
 * @property int $to_department_id
 * @property int|null $repair_type_id
 * @property int|null $machine_id
 * @property int $from_department_id
 * @property string|null $title
 * @property string|null $description
 * @property int|null $priority_id
 * @property string|null $expected_date
 * @property string|null $photos
 * @property int|null $status_id
 *
 * @property Machine[] $machines
 * @property ManagerApprove[] $managerApproves
 * @property Operator[] $operators
 * @property Department $fromDepartment
 * @property Department $toDepartment
 * @property Machine $machine
 * @property Priority $priority
 * @property RepairType $repairType
 * @property Status $status
 */
class Repair extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'repair';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['requester_by', 'to_department_id', 'repair_type_id', 'machine_id', 'from_department_id', 'priority_id', 'status_id'], 'integer'],
            [['to_department_id', 'from_department_id'], 'required'],
            [['description', 'photos'], 'string'],
            [['repair_number', 'requester_at', 'expected_date'], 'string', 'max' => 45],
            [['title'], 'string', 'max' => 100],
            [['from_department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['from_department_id' => 'id']],
            [['to_department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['to_department_id' => 'id']],
            [['machine_id'], 'exist', 'skipOnError' => true, 'targetClass' => Machine::className(), 'targetAttribute' => ['machine_id' => 'id']],
            [['priority_id'], 'exist', 'skipOnError' => true, 'targetClass' => Priority::className(), 'targetAttribute' => ['priority_id' => 'id']],
            [['repair_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => RepairType::className(), 'targetAttribute' => ['repair_type_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'repair_number' => Yii::t('app', 'Repair Number'),
            'requester_by' => Yii::t('app', 'Requester By'),
            'requester_at' => Yii::t('app', 'Requester At'),
            'to_department_id' => Yii::t('app', 'To Department ID'),
            'repair_type_id' => Yii::t('app', 'Repair Type ID'),
            'machine_id' => Yii::t('app', 'Machine ID'),
            'from_department_id' => Yii::t('app', 'From Department ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'priority_id' => Yii::t('app', 'Priority ID'),
            'expected_date' => Yii::t('app', 'Expected Date'),
            'photos' => Yii::t('app', 'Photos'),
            'status_id' => Yii::t('app', 'Status ID'),
        ];
    }

    /**
     * Gets query for [[Machines]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMachines()
    {
        return $this->hasMany(Machine::className(), ['repair_id' => 'id']);
    }

    /**
     * Gets query for [[ManagerApproves]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getManagerApproves()
    {
        return $this->hasMany(ManagerApprove::className(), ['repair_id' => 'id']);
    }

    /**
     * Gets query for [[Operators]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperators()
    {
        return $this->hasMany(Operator::className(), ['repair_id' => 'id']);
    }

    /**
     * Gets query for [[FromDepartment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFromDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'from_department_id']);
    }

    /**
     * Gets query for [[ToDepartment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getToDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'to_department_id']);
    }

    /**
     * Gets query for [[Machine]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMachine()
    {
        return $this->hasOne(Machine::className(), ['id' => 'machine_id']);
    }

    /**
     * Gets query for [[Priority]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPriority()
    {
        return $this->hasOne(Priority::className(), ['id' => 'priority_id']);
    }

    /**
     * Gets query for [[RepairType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRepairType()
    {
        return $this->hasOne(RepairType::className(), ['id' => 'repair_type_id']);
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRequesterBy()
    {
        return $this->hasOne(User::className(), ['id' => 'requester_by']);
    }
}
