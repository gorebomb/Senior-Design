import boto3
from botocore.client import Config

ACCESS_KEY_ID = 'AKIAJU72DMDFSBUX55VA'
ACCESS_SECRET_KEY = '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'
BUCKET_NAME = 'utd795-sms'

data = open('scrub.json', 'rb')

s3 = boto3.resource(
    's3',
    aws_access_key_id=ACCESS_KEY_ID,
    aws_secret_access_key=ACCESS_SECRET_KEY,
    config=Config(signature_version='s3v4')
)
s3.Bucket(BUCKET_NAME).put_object(Key='scrub.json', Body=data)

print ("Done")

