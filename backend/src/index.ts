require("dotenv").config();

import "reflect-metadata";

import { port, url, username, password } from './constans';
import { createConnection } from "typeorm";

import express from "express";
import helmet from "helmet";
import cors from "cors";
import { Customer } from "./Entities/Customer";
import { router } from "./endpoint/routes";
import { Conference } from "./Entities/Conference";
import { CustomerToConferenceRelation } from "./Entities/CustomerToConferenceRelation";

async function main() {
  // Connect to Database
  await connect();

  // Setup Server
  const app = express();

  app.use(helmet());
  app.use(express.static('website/app'));
  app.use(express.json());
  app.use(cors());
  app.use(router);

  app.listen(port, () => {
      console.log(`🚀 Server ready at http://localhost:${port}`);
  });
}

const connect = async () => {
    
    await createConnection({
        type: "mssql",
        username: username,
        password: password,
        host: url,
        database: "webconia-projekt",
        entities: [Customer, Conference, CustomerToConferenceRelation],
        synchronize: true
    });
};


main().catch((err) => {
  console.log(err);
});
