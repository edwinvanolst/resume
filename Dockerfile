FROM python:slim
ADD . /code
WORKDIR /code
RUN pip install --no-cache-dir -r requirements.txt
CMD [ "python", "resume.py" ]

