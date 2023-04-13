<?php

namespace Database\Seeders\Application;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Group;
use App\Models\Lab;
use App\Models\ScheduleGroup;
use App\Models\Student;
use App\Models\TimeLesson;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LabSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Lab::insert([
            [
                'title' => '2.7.2 Configure Single-Area OSPFv2',
                'discipline_id' => 1,
                'routers' => 2,
                'switches' => 2
            ],
            [
                'title' => '5.5.2 Configure and Verify Extended IPv4 ACLs',
                'discipline_id' => 1,
                'routers' => 2,
                'switches' => 2
            ],
            [
                'title' => '6.8.2 Configure NAT for IPv4',
                'discipline_id' => 1,
                'routers' => 2,
                'switches' => 2
            ],
            [
                'title' => '10.6.11 Use Tera Term to Manage Router Configuration Files',
                'discipline_id' => 1,
                'routers' => 1,
                'switches' => 1
            ],
            [
                'title' => '10.6.12 Use TFTP, Flash, and USB to Manage Configuration Files',
                'discipline_id' => 1,
                'routers' => 1,
                'switches' => 1
            ],
            [
                'title' => '10.8.22 Configure CDP, LLDP, and NTP',
                'discipline_id' => 1,
                'routers' => 1,
                'switches' => 2
            ],
            [
                'title' => 'Final Hands on',
                'discipline_id' => 1,
                'routers' => 3,
                'switches' => 2
            ],
            [
                'title' => '2.6.1.2 Securing the Router for Administrative Access',
                'discipline_id' => 2,
                'routers' => 3,
                'switches' => 2
            ],
            [
                'title' => '3.6.1.1 Securing Administrative Access Using AAA and RADIUS',
                'discipline_id' => 2,
                'routers' => 3,
                'switches' => 2
            ],
            [
                'title' => '4.4.1.2 Configuring Zone-Based Policy Firewalls',
                'discipline_id' => 2,
                'routers' => 3,
                'switches' => 2
            ],
            [
                'title' => '5.4.1.1 Configure an Intrusion Prevention System (IPS)',
                'discipline_id' => 2,
                'routers' => 3,
                'switches' => 2
            ],
            [
                'title' => '6.3.1.1 Securing Layer 2 Switches',
                'discipline_id' => 2,
                'routers' => 1,
                'switches' => 2
            ],
            [
                'title' => '8.4.1.3 Lab -Configure Site-to-Site VPN using CLI',
                'discipline_id' => 2,
                'routers' => 3,
                'switches' => 2
            ],
            [
                'title' => '9.3.1.2 Configure ASA 5505 Basic Settings and Firewall Using CLI',
                'discipline_id' => 2,
                'routers' => 3,
                'switches' => 3
            ],
            [
                'title' => '10.1.4.8 Configure ASA 5505 Basic Settings and Firewall Using ASDM',
                'discipline_id' => 2,
                'routers' => 3,
                'switches' => 3
            ],
            [
                'title' => '10.2.1.9 Configure a Site-to-Site IPsec VPN Using ISR CLI and ASA 5505 ASDM',
                'discipline_id' => 2,
                'routers' => 3,
                'switches' => 3
            ],
            [
                'title' => '11.3.1.2 CCNA Security ASA 5505 Comprehensive',
                'discipline_id' => 2,
                'routers' => 3,
                'switches' => 3
            ],
            [
                'title' => 'Final Hands on',
                'discipline_id' => 2,
                'routers' => 3,
                'switches' => 3
            ],
        ]);
    }
}
