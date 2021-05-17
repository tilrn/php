<?php


function con()
{
    return pg_connect("host=ec2-176-34-222-188.eu-west-1.compute.amazonaws.com dbname=d6mgn1man4juqu user=epebibyjgvxunf password=93ec9324d483d5ed6ade4fee633490dd665c1d710943c76dbd59a7ece3df6432");
}